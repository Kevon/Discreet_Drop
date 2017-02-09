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
        if(empty($user->substantiated_at) or count($orders)==0){
            $placeholder = new Order;
            $placeholder->id = 0;
            $orders = collect([$placeholder]);
        }
        return view('dashboard', compact('user', 'orders', 'dd_info'));
    }
    
    public function tutorial(){
    	return view('tutorial');
    }
    
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
            $customer = \Stripe\Customer::create(array(
                "email" => $user->email,
                "source" => $request->stripeToken,
            ));
            
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