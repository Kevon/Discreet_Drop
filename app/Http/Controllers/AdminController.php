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
            Session::flash('error', 'DD Code not linked to any user.');
            return back();
        }
        $allOrders = $user->Orders()->get();
        $pendingOrders = $user->Orders()->where('order_status', 'pending')->get();
        $order = null;
        if(count($allOrders) == 0 or count($pendingOrders) == 0){
            $order = new Order;
            $order->user_id = $user->id;
            $order->order_status = 'Received';
            $order->created_by = $adminUser->id;
            $order->save();
        }
        else{
            $order = $pendingOrders->last();
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
            'tracking_number' => 'required|unique:incoming_packages,tracking_number,3',
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
            Session::flash('error', 'DD Code not linked to any user.');
            return back();
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
        
        Session::flash('message', 'Incoming package successfuly modifyed.');
        return redirect()->to('/admin/orders/'.$incoming_package->order_id);
    }
    
    public function usersList(){
        return view('admin/admin_order_panel', compact('order'));
    }
    
    public function userPanel(){
        return view('admin/admin_order_panel', compact('order'));
    }
    
    public function ordersList(){
        return view('admin/admin_order_panel', compact('order'));
    }
    
    public function orderPanel(Order $order){
        $shipment = $order->Shipment()->first();
        $user = $order->User()->first();
        $incoming_package = $order->Incoming_Package()->first();
        $charges = $shipment->Charges()->get();
        $outgoing_packages = $shipment->Charges()->get();
        if($shipment->charge_status != "Charged"){
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
                $bVolume = $b->length * $b->width * $b->height;
                if($bVolume > $incomingPackageVolume and ($b->length > $incomingPackageLength and $b->width > $incomingPackageWidth and $b->height > $incomingPackageHeight) and $bVolume < $boxVolume){
                    $box = $b;
                    $boxVolume = $bVolume;
                }
            }
            
            $boxLength = $box->length;
            $boxWidth = $box->width;
            $boxHeight = $box->height;
            if($boxLength < $boxWidth){
                $temp = $boxLength;
                $boxLength = $boxWidth;
                $boxWidth = $temp;
            }
            if($boxLength < $boxHeight){
                $temp = $boxLength;
                $boxLength = $boxHeight;
                $boxHeight = $temp;
            }
            if($boxWidth < $boxHeight){
                $temp = $boxWidth;
                $boxWidth = $boxHeight;
                $boxHeight = $temp;
            }
            
            $dd_info = DD_Info::where('active', 'YES')->first();

            \EasyPost\EasyPost::setApiKey(config('services.easypost.key'));

            $to_address_params = array("name"    => $user->first_name." ".$user->last_name,
                                       "street1" => $user->address_1,
                                       "street2" => $user->address_2,
                                       "city"    => $user->city,
                                       "state"   => $user->state,
                                       "zip"     => $user->zip_code,
                                       "phone"   => $user->phone);

            $to_address = \EasyPost\Address::create($to_address_params);

            $from_address_params = array("name"  => $dd_info->dd_name,
                                       "street1" => $dd_info->address_1,
                                       "street2" => $dd_info->address_2,
                                       "city"    => $dd_info->city,
                                       "state"   => $dd_info->state,
                                       "zip"     => $dd_info->zip_code);

            $from_address = \EasyPost\Address::create($from_address_params);

            $predefined_package = null;

            if($boxLength+($boxWidth*2)+($boxHeight*2)<=108){
                $predefined_package = "Parcel";
            }
            else if($boxLength+($boxWidth*2)+($boxHeight*2)<=130){
                $predefined_package = "LargeParcel";
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

        return view('admin/admin_order_panel', compact('order', 'user', 'incoming_package', 'shipment', 'charges', 'outgoing_packages', 'quoteShipment', 'quoteRate', 'box'));
    }
    
    public function processOrder(Order $order, Request $request){
        return view('admin/admin_order_panel', compact('order'));
    }
    
}