<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use Session;
use App\User;
use App\DD_Info;
use App\Order;
use App\Incoming_Package;
use App\Shipment;
use App\Charge;
use App\Outgoing_Package;
use App\Box;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

use App\Mail\OrderShipped;
use App\Mail\ChargeFailed;
use Illuminate\Support\Facades\Mail;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){
        return view('admin/admin_panel');
    }
    
    public function newIncomingPackage(){
        return view('admin/new_incoming_package');
    }
    
    public function editIncomingPackage(Incoming_Package $incoming_package){
        return view('admin/edit_incoming_package', compact('incoming_package'));
    }
    
    public function saveIncomingPackage(Request $request){
        $this->validate($request, [
            'carrier' => 'required',
            'tracking_number' => 'required|unique:incoming_packages,tracking_number',
            'dd_code' => 'required|digits:6',
            'sender' => 'required',
            'length' => 'required|digits_between:1,2',
            'width' => 'required|digits_between:1,2',
            'height' => 'required|digits_between:1,2',
            'weight_in_oz' => 'required|digits_between:1,4'
        ]);
        $adminUser = Auth::user();
        $user = User::where('dd_code', $request->dd_code)->first();
        if(empty($user)){
            Session::flash('alert', 'DD Code not linked to any user.');
            return back()->withInput($request->input());
        }
        $allOrders = $user->Orders()->get();
        $pendingOrders = $user->Orders()->where('order_status', 'pending')->get();
        $order = null;
        if(count($allOrders) == 0 or count($pendingOrders) == 0){
            $order = new Order;
            $order->user_id = $user->id;
            $order->order_status = 'Received';
            $order->shipment_status = 'Received';
            $order->incoming_package_status = 'Received';
            $order->created_by = $adminUser->id;
            $order->save();
        }
        else{
            $order = $pendingOrders->first();
        }
        
        $length = $request->length;
        $width = $request->width;
        $height = $request->height;
        if($length < $width){
            $temp = $length;
            $length = $width;
            $width = $temp;
        }
        if($length < $height){
            $temp = $length;
            $length = $height;
            $height = $temp;
        }
        if($width < $height){
            $temp = $width;
            $width = $height;
            $height = $temp;
        }
        
        $incomingPackage = new Incoming_Package;
        
        $incomingPackage->order_id = $order->id;
        $incomingPackage->carrier = $request->carrier;
        $incomingPackage->tracking_number = $request->tracking_number;
        $incomingPackage->dd_code = $request->dd_code;
        $incomingPackage->sender = $request->sender;
        $incomingPackage->length = $length;
        $incomingPackage->width = $width;
        $incomingPackage->height = $height;
        $incomingPackage->weight_in_oz = $request->weight_in_oz;
        $incomingPackage->created_by = $adminUser->id;
        $incomingPackage->save();
        
        $order->order_status = "Received";
        $order->shipment_status = "Received";
        $order->incoming_package_status = "Received";
        $order->save();
        
        $shipment = new Shipment;
        $shipment->order_id = $order->id;
        $shipment->charge_status = "Pending";
        $shipment->outgoing_package_status = "Pending";
        $shipment->created_by = $adminUser->id;
        $shipment->save();
        
        Session::flash('message', 'New incoming package successfuly saved.');
        return redirect()->to('/admin/orders/'.$order->id);
    }
    
    public function modifyIncomingPackage(Incoming_Package $incoming_package, Request $request){
        $this->validate($request, [
            'carrier' => 'required',
            'tracking_number' => 'required|unique:incoming_packages,tracking_number,'.$incoming_package->id,
            'dd_code' => 'required|digits:6',
            'sender' => 'required',
            'length' => 'required|digits_between:1,2',
            'width' => 'required|digits_between:1,2',
            'height' => 'required|digits_between:1,2',
            'weight_in_oz' => 'required|digits_between:1,4'
        ]);
        $adminUser = Auth::user();
        $user = User::where('dd_code', $request->dd_code)->first();
        if(empty($user)){
            Session::flash('alert', 'DD Code not linked to any user.');
            return back()->withInput($request->input());
        }
        
        $length = $request->length;
        $width = $request->width;
        $height = $request->height;
        if($length < $width){
            $temp = $length;
            $length = $width;
            $width = $temp;
        }
        if($length < $height){
            $temp = $length;
            $length = $height;
            $height = $temp;
        }
        if($width < $height){
            $temp = $width;
            $width = $height;
            $height = $temp;
        }
        
        $incoming_package->carrier = $request->carrier;
        $incoming_package->tracking_number = $request->tracking_number;
        $incoming_package->dd_code = $request->dd_code;
        $incoming_package->sender = $request->sender;
        $incoming_package->length = $length;
        $incoming_package->width = $width;
        $incoming_package->height = $height;
        $incoming_package->weight_in_oz = $request->weight_in_oz;
        $incoming_package->created_by = $adminUser->id;
        $incoming_package->save();
        
        Session::flash('message', 'Incoming package successfuly modified.');
        return redirect()->to('/admin/orders/'.$incoming_package->order_id);
    }
    
    public function usersList(){
        $users = User::whereNotNull('dd_code')->get();
        return view('admin/users_list', compact('users'));
    }
    
    public function userPanel(User $user){
        $user->load('Incoming_Packages.Order');
        return view('admin/user_panel', compact('user'));
    }
    
    public function ordersList(){
        $allOrders = Order::has('Incoming_Package')->latest()->get();
        $allOrders->load('Incoming_Package', 'Shipment');
        $allOrders = $allOrders->groupBy(function($item){
            return $item->Incoming_Package->created_at->format('m/d/Y');
        });
        $chargeErrorOrders = Shipment::where('charge_status', 'Charge Error')->latest()->get();
        $chargeErrorOrders->load('Order.Incoming_Package');
        $shipmentErrorOrders = Shipment::where('outgoing_package_status', 'Shipment Error')->latest()->get();
        $shipmentErrorOrders->load('Order.Incoming_Package');
        return view('admin/orders_list', compact('allOrders', 'chargeErrorOrders', 'shipmentErrorOrders'));
    }
    
    public function orderPanel(Order $order){
        $shipment = $order->Shipment()->first();
        $user = $order->User()->first();
        $adminUser = Auth::user();
        $incoming_package = $order->Incoming_Package()->first();
        $charges = $shipment->Charges()->get();
        $outgoing_packages = $shipment->Outgoing_Packages()->get();
        $outgoing_packages->load('Box');
        $successfulOutgoingPackage = $shipment->Latest_Outgoing_Package()->whereNotNull('tracking_number')->with('Box')->first();

        if(empty($successfulOutgoingPackage)){
            $boxes = Box::where('status', 'ACTIVE')->get();  

            $incomingPackageLength = $incoming_package->length;
            $incomingPackageWidth = $incoming_package->width;
            $incomingPackageHeight = $incoming_package->height;
            if($incomingPackageLength < $incomingPackageWidth){
                $temp = $incomingPackageLength;
                $incomingPackageLength = $incomingPackageWidth;
                $incomingPackageWidth = $temp;
            }
            if($incomingPackageLength < $incomingPackageHeight){
                $temp = $incomingPackageLength;
                $incomingPackageLength = $incomingPackageHeight;
                $incomingPackageHeight = $temp;
            }
            if($incomingPackageWidth < $incomingPackageHeight){
                $temp = $incomingPackageWidth;
                $incomingPackageWidth = $incomingPackageHeight;
                $incomingPackageHeight = $temp;
            }
            
            $incomingPackageVolume = $incomingPackageLength * $incomingPackageWidth * $incomingPackageHeight;
            
            $box = null;
            $boxVolume = PHP_INT_MAX;
            foreach($boxes as $b){
                $bLength = $b->length;
                $bWidth = $b->width;
                $bHeight = $b->height;
                if($bLength < $bWidth){
                    $temp = $bLength;
                    $bLength = $bWidth;
                    $bWidth = $temp;
                }
                if($bLength < $bHeight){
                    $temp = $bLength;
                    $bLength = $bHeight;
                    $bHeight = $temp;
                }
                if($bWidth < $bHeight){
                    $temp = $bWidth;
                    $bWidth = $bHeight;
                    $bHeight = $temp;
                }
                $bVolume = $bLength * $bWidth * $bHeight;
                if($bVolume >= $incomingPackageVolume and ($bLength >= $incomingPackageLength and $bWidth >= $incomingPackageWidth and $bHeight >= $incomingPackageHeight) and $bVolume < $boxVolume){
                    $box = $b;
                    $boxVolume = $bVolume;
                }
            }
            
            if(empty($box)){
                $box_name = 'Custom Box for Order #'.$order->id;
                $box = Box::where('box_name', $box_name)->first();
                if(empty($box)){
                    $box = New Box;
                    $box->box_name = $box_name;
                }
                $box->length = $incomingPackageLength;
                $box->width = $incomingPackageWidth;
                $box->height = $incomingPackageHeight;
                $box->status = 'CUSTOM';
                $box->created_by = $adminUser->id;
                
                $box->save();
            }
            
            $boxLength = $box->length;
            $boxWidth = $box->width;
            $boxHeight = $box->height;
            
            $dd_info = DD_Info::where('active', 'YES')->first();

            \EasyPost\EasyPost::setApiKey(config('services.easypost.key'));

            $to_address_params = array("name"    => $user->first_name." ".$user->last_name,
                                       "street1" => $user->address_1,
                                       "street2" => $user->address_2,
                                       "city"    => $user->city,
                                       "state"   => $user->state,
                                       "zip"     => $user->zip_code,
                                       "phone"   => $user->phone,
                                       "email"   => $user->email);

            $to_address = \EasyPost\Address::create($to_address_params);

            $from_address_params = array("name"  => $dd_info->dd_name,
                                       "street1" => $dd_info->address_1,
                                       "street2" => $dd_info->address_2,
                                       "city"    => $dd_info->city,
                                       "state"   => $dd_info->state,
                                       "zip"     => $dd_info->zip_code,
                                       "phone"   => $dd_info->phone);

            $from_address = \EasyPost\Address::create($from_address_params);

            $predefined_package = null;

            if($boxLength+($boxWidth*2)+($boxHeight*2)<=108){
                $predefined_package = "Parcel";
            }
            else if($boxLength+($boxWidth*2)+($boxHeight*2)<=130){
                $predefined_package = "LargeParcel";
                $boxLength = null;
                $boxWidth = null;
                $boxHeight = null;
            }

            $parcel_params = array("length"     => $boxLength,
                                   "width"      => $boxWidth,
                                   "height"     => $boxHeight,
                                   "predefined_package" => $predefined_package,
                                   "weight"      => $incoming_package->weight_in_oz + 16
            );
            $parcel = \EasyPost\Parcel::create($parcel_params);

            $shipment_params = array("from_address" => $from_address,
                                     "to_address"   => $to_address,
                                     "parcel"       => $parcel
            );
            $quoteShipment = \EasyPost\Shipment::create($shipment_params);

            $quoteRate = \EasyPost\Rate::retrieve($quoteShipment->lowest_rate());
        }

        return view('admin/admin_order_panel', compact('order', 'user', 'incoming_package', 'shipment', 'charges', 'outgoing_packages', 'quoteShipment', 'quoteRate', 'box', 'dd_info', 'successfulOutgoingPackage'));
    }
    
    public function processOrder(Order $order, Request $request){
        $user = $order->User()->first();
        $shipment = $order->Shipment()->first();
        $adminUser = Auth::user();
        $dd_info = DD_Info::where('active', 'YES')->first();
        $successfulCharge = $shipment->Latest_Charge()->where('stripe_status','succeeded')->first();
        
        \EasyPost\EasyPost::setApiKey(config('services.easypost.key'));
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        
        if(!empty($request->shipment_id)){
            $quoteShipment = \EasyPost\Shipment::retrieve(array('id' => $request->shipment_id));
        }
        
        if(empty($successfulCharge)){
            $charge = new Charge;
            $charge->shipment_id = $shipment->id;
            $charge->created_by = $adminUser->id;
            $StripeCharge = null;
            
            try{
                $StripeCharge = \Stripe\Charge::create(array(
                    "amount" => ($quoteShipment->lowest_rate()->rate*100)+($dd_info->dd_rate),
                    "currency" => "usd",
                    "customer" => $user->stripe_id
                ));
            }
            catch (Exception $e){
                $StripeCharge = \Stripe\Charge::retrieve($e->jsonBody['error']['charge']);
            }
            
            $charge->stripe_charge_id = $StripeCharge->id;
            $charge->stripe_amount = $StripeCharge->amount;
            $charge->stripe_currency = $StripeCharge->currency;
            $charge->stripe_balance_transaction = $StripeCharge->balance_transaction;
            $charge->stripe_customer = $StripeCharge->customer;
            $charge->stripe_failure_code = $StripeCharge->failure_code;
            $charge->stripe_failure_message = $StripeCharge->failure_message;
            $charge->stripe_receipt_email = $StripeCharge->receipt_email;
            $charge->stripe_receipt_number = $StripeCharge->receipt_number;
            $charge->stripe_source_id = $StripeCharge->source->id;
            $charge->stripe_source_brand = $StripeCharge->source->brand;
            $charge->stripe_source_last4 = $StripeCharge->source->last4;
            $charge->stripe_source_exp_month = $StripeCharge->source->exp_month;
            $charge->stripe_source_exp_year = $StripeCharge->source->exp_year;
            $charge->stripe_status = $StripeCharge->status;
            

            $charge->save();
            
            if($charge->stripe_status == 'succeeded'){         
                $order->order_status = 'Charged';
                $order->shipment_status = 'Charged';
                $order->total_cost = $charge->stripe_amount;
                $shipment->charge_status = 'Charged';
                
                $order->save();
                $shipment->save();
            }
            else{
                $order->order_status = 'Charge Error';
                $order->shipment_status = 'Charge Error';
                $shipment->charge_status = 'Charge Error';
                
                $order->save();
                $shipment->save();
                
                Mail::to($user->email)->send(new ChargeFailed($user, $charge));
                
                Session::flash('alert', 'Charge error - '.$charge->stripe_failure_message);
                return back();
            }
        }
        
        $successfulCharge = $shipment->Latest_Charge()->where('stripe_status','succeeded')->first();
        $successfulOutgoingPackage = $shipment->Latest_Outgoing_Package()->whereNotNull('tracking_number')->first();

        if(!empty($successfulCharge) and empty($successfulOutgoingPackage)){
            $quoteShipment = $quoteShipment->buy(array(
                'rate' => $quoteShipment->lowest_rate()
            ));
            
            $outgoing_package = new Outgoing_Package;
            
            $outgoing_package->shipment_id = $shipment->id;
            $outgoing_package->dd_info_id = $dd_info->id;
            $outgoing_package->api_used = "EasyPost";
            $outgoing_package->to_name = $quoteShipment->to_address->name;
            $outgoing_package->to_street1 = $quoteShipment->to_address->street1;
            $outgoing_package->to_street2 = $quoteShipment->to_address->street2;
            $outgoing_package->to_city = $quoteShipment->to_address->city;
            $outgoing_package->to_state = $quoteShipment->to_address->state;
            $outgoing_package->to_zip_code = $quoteShipment->to_address->zip;
            $outgoing_package->to_phone = $quoteShipment->to_address->phone;
            $outgoing_package->to_email = $quoteShipment->to_address->email;
            $outgoing_package->box_id = $request->box_id;
            $outgoing_package->api_id = $quoteShipment->id;
            $outgoing_package->predefined_package = $quoteShipment->parcel->id;
            $outgoing_package->weight_in_oz = $quoteShipment->parcel->weight;
            $outgoing_package->label_url = $quoteShipment->postage_label->label_url;
            $outgoing_package->rate_id = $quoteShipment->selected_rate->id;
            $outgoing_package->rate = $quoteShipment->selected_rate->rate;
            $outgoing_package->carrier = $quoteShipment->selected_rate->carrier;
            $outgoing_package->service = $quoteShipment->selected_rate->service;
            $outgoing_package->delivery_days = $quoteShipment->selected_rate->delivery_days;
            $outgoing_package->delivery_date = $quoteShipment->selected_rate->est_delivery_date;
            $outgoing_package->status = $quoteShipment->status;
            $outgoing_package->tracker_id = $quoteShipment->tracker->id;
            $outgoing_package->tracking_number = $quoteShipment->tracking_code;
            $outgoing_package->tracking_url = $quoteShipment->tracker->public_url;
            $outgoing_package->created_by = $adminUser->id;
            
            $outgoing_package->save();
            
            if(!empty($outgoing_package->tracking_number)){         
                $order->order_status = 'Shipped';
                $order->shipment_status = 'Shipped';
                $shipment->outgoing_package_status = 'Shipped';
                
                $order->save();
                $shipment->save();
                
                Mail::to($user->email)->send(new OrderShipped($user, $order));
            }
            else{
                $shipment->outgoing_package_status = 'Shipment Error';
                $order->shipment_status = 'Shipment Error';
                
                $order->save();
                $shipment->save();
                
                Session::flash('alert', 'Shipment error.');
                return back();
            }
            
            
        }
        Session::flash('message', 'Package Successfully Processed!');
        return redirect()->to('/admin/orders/'.$order->id);
    }
    
}