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
            $order = $pendingOrders->latest()->first();
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
        return redirect()->to('/admin/outgoing_package/'.$order->id);
    }
    
    public function outgoingPackagePanel(Order $order){
        $order = Order::find($order->id);
        $shipment = $order->Shipment()->first();
        
        if($shipment->charge_status == "Pending"){
            
        }
        else{
            
        }
        return view('admin/outgoing_package_panel');
    }
    
}