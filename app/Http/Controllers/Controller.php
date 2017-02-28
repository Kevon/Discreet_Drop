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
use Illuminate\Http\Request;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){
        return view('landing');
    }
    
    public function dashboard(){
        $user = Auth::user();
        $dd_info = DD_Info::where('active', 'YES')->first();
        $orders = $user->Orders;
        $orders->load('Incoming_Package');
        $orders->load('Shipment.Latest_Charge');
        $orders->load('Shipment.Latest_Outgoing_Package');
        return view('dashboard', compact('user', 'orders', 'dd_info'));
    }
    
    public function tutorial(){
    	return view('tutorial');
    }
    
    public function howItWorks(){
    	return view('how_it_works');
    }
    
    public function faq(){
    	return view('faq');
    }
    
    public function about(){
    	return view('about');
    }
    
    public function contact(){
        $dd_info = DD_Info::where('active', 'YES')->first();
    	return view('contact', compact('dd_info'));
    }
    
    public function pricingCalculator(){
    	return view('pricing_calculator');
    }
    
    public function getRate(Request $request){
        $this->validate($request, [
            'size' => 'required|digits_between:2,3',
            'weight' => 'required|digits_between:2,3',
            'zip_code' => 'required|regex:/^\d{5}(-\d{4})?$/'
        ]);
        
        $dd_info = DD_Info::where('active', 'YES')->first();
        
        \EasyPost\EasyPost::setApiKey(config('services.easypost.key'));
        
        $to_address_params = array("name"    => "John Doe",
                                   "street1" => "123 Main Street",
                                   "zip"     => $request->zip_code);
        
        $to_address = \EasyPost\Address::create($to_address_params);
        
        $from_address_params = array("name"  => $dd_info->dd_name,
                                   "street1" => $dd_info->address_1,
                                   "street2" => $dd_info->address_2,
                                   "city"    => $dd_info->city,
                                   "state"   => $dd_info->state,
                                   "zip"     => $dd_info->zip_code);
        
        $from_address = \EasyPost\Address::create($from_address_params);
        
        $length = $request->size;
        $width = 12;
        $height = 12;
        $predefined_package = null;
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
        if($length+($width*2)+($height*2)<=108){
            $predefined_package = "Parcel";
        }
        else if($length+($width*2)+($height*2)<=130){
            $predefined_package = "LargeParcel";
            $length = null;
            $width = null;
            $height = null;
        }
            
        $parcel_params = array("length"     => $length,
                               "width"      => $width,
                               "height"     => $height,
                               "predefined_package" => $predefined_package,
                               "weight"      => $request->weight
        );
        $parcel = \EasyPost\Parcel::create($parcel_params);
        
        $shipment_params = array("from_address" => $from_address,
                                 "to_address"   => $to_address,
                                 "parcel"       => $parcel
        );
        $shipment = \EasyPost\Shipment::create($shipment_params);
        
        $rate = \EasyPost\Rate::retrieve($shipment->lowest_rate());
        
    	return view('partials.rate', compact('dd_info', 'rate'));
    }
    
    
    /*
    
    public function getRate(Request $request){
        $this->validate($request, [
            'size' => 'required|digits_between:2,3',
            'weight' => 'required|digits_between:2,3',
            'zip_code' => 'required|regex:/^\d{5}(-\d{4})?$/'
        ]);
        $dd_info = DD_Info::where('active', 'YES')->first();
        
        \Shippo::setApiKey(config('services.shippo.key'));

        $from_address = array(
            'object_purpose' => 'QUOTE',
            'name' => $dd_info->dd_name,
            'street1' => $dd_info->address_1,
            'street2' => $dd_info->address_1,
            'city' => $dd_info->city,
            'state' => $dd_info->state,
            'zip' => $dd_info->zip_code,
            'country' => 'US'
        );
        
        $to_address = array(
            'object_purpose' => 'QUOTE',
            'name' => 'John Doe',
            'street1' => '123 Main Street',
            'zip' => $request->zip_code,
            'country' => 'US'
        );
        
        $parcel = array(
            'length'=> $request->size,
            'width'=> '24',
            'height'=> '24',
            'distance_unit'=> 'in',
            'weight'=> $request->weight,
            'mass_unit'=> 'oz'
        );
        
        $shipment = \Shippo_Shipment::create(array(
            'object_purpose'=> 'QUOTE',
            'address_from'=> $from_address,
            'address_to'=> $to_address,
            'parcel'=> $parcel,
            'async'=> false
        ));
        
        $rates = $shipment['rates_list'];
        
        $minID = NULL;
        $minRate = PHP_INT_MAX;
        foreach($rates as $key=>$rate){
            if($rate['amount'] < $minRate){
                $minRate = $rate['amount'];
                $minId = $key;
            }
        }
        $rate = $rates[$minId];
        return view('partials.rate', compact('dd_info', 'rate'));
    }
    */
    
    
    public function profile_info(){
        $user = Auth::user();
    	return view('profile_info', compact('user'));
    }
    
    public function updateProfile(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required|regex:/^\d{5}(-\d{4})?$/'
        ]);
        
        $user = Auth::user();
        
        $user->first_name = $request->first_name; 
        $user->last_name = $request->last_name; 
        $user->address_1 = $request->address_1; 
        $user->address_2 = $request->address_2; 
        $user->city = $request->city; 
        $user->state = $request->state; 
        $user->zip_code = $request->zip_code; 
        $user->phone = $request->phone; 
        
        if(!empty($request->stripeToken)){
            \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
            $customer= NULL;
            if(!empty($user->stripe_id)){
                $customer = \Stripe\Customer::retrieve($user->stripe_id);
                $customer->source = $request->stripeToken;
                $customer = $customer->save();
            }
            else{
                $customer = \Stripe\Customer::create(array(
                "email" => $user->email,
                "source" => $request->stripeToken,
                ));
            }
            
            $customer = collect($customer);
            $source = collect($customer["sources"]);
            $data = collect($source["data"])[0];

            $user->stripe_id = $customer["id"];
            $user->stripe_default_source = $customer["default_source"];
            $user->stripe_brand = $data["brand"];
            $user->stripe_last4 = $data["last4"];
            $user->stripe_exp_month = $data["exp_month"];
            $user->stripe_exp_year = $data["exp_year"];
        }
        if(empty($user->substantiated_at)){
            $user->substantiated_at = Carbon::now();
        }
        if(empty($user->dd_code)){
            $dd_code = rand(100000, 999999);
            $existing_codes = Auth::user()->pluck('id')->toArray();
            while(in_array($dd_code, $existing_codes)){
                $dd_code = rand(100000, 999999);
            }
            $user->dd_code = $dd_code;
        }
        $user->save();
        Session::flash('message', 'Shipping profile successfully updated!');
        return redirect()->to('/dashboard');
    }
    
    public function login_info(){
        $user = Auth::user();
    	return view('login_info', compact('user'));
    }
    
    public function updateInfo(Request $request){
        $user = Auth::user();
        $this->validate($request, ['email' => 'required|email|max:255|unique:users,email,' . $user->id]);
        $user->email = $request->email;
        
        if(!empty($request->password)){
            $this->validate($request, ['password' => 'required|min:6|confirmed']);
            $user->password = bcrypt($request->password);
        }
        if(!empty($user->stripe_id)){
            \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
            $customer = \Stripe\Customer::retrieve($user->stripe_id);
            $customer->email = $request->email;
            $customer->save();
        }
        
        $user->save();
        Session::flash('message', 'Login info successfully updated!');
        return redirect()->to('/dashboard');
    }
    
    public function deleteUser(Request $request){
        $user = Auth::user();
        $user->delete();
        Session::flash('message', 'User successfully deleted.');
        return redirect()->to('/');
    }
    
    public function addOrder(){
        $user = Auth::user();
        $order = new Order;
        $order->user_id = $user->id;
        $order->order_status = 'Pending';
        $order->created_by = $user->id;
        $order->save();
        Session::flash('message', 'Order successfully created!');
        return back();
    }
    
    public function deleteOrder(Request $request, Order $order){
        $user = Auth::user();
        $order = Order::find($order->id);
        if($order->user_id == $user->id){
            $order->delete();
            Session::flash('message', 'Order successfully deleted.');
            return redirect()->to('/dashboard');
        }
        else{
            Session::flash('error', 'Could not delete order. Please try again.');
            return back();
        }
    }
}