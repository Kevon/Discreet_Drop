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
            'tracking_number' => 'required',
            'dd_code' => 'required|digits:6',
            'sender' => 'required',
            'length' => 'required|digits_between:1,2',
            'width' => 'required|digits_between:1,2',
            'height' => 'required|digits_between:1,2',
            'weight_in_oz' => 'required|digits_between:1,4'
        ]);
        $user = Auth::user();
        Session::flash('message', 'New incoming package successfuly saved.');
        return redirect()->to('/admin/outgoing_package/'.$order->id);
    }
    
    public function outgoingPackagePanel(Order $order){
        $order = Order::find($order->id);
    }
    
}