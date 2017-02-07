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
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){
        return view('landing');
    }
    
    public function dashboard(){
        $user = Auth::user();
        $orders = $user->Orders();
        $dd_info = DD_Info::where('active', 'YES')->first(); 
    	return view('dashboard', compact('user', 'orders', 'dd_info'));
    }
    
    public function tutorial(){
    	return view('tutorial');
    }
    
    public function profile_info(){
        $user = Auth::user();
    	return view('profile_info', compact('user'));
    }
    
    public function login_info(){
        $user = Auth::user();
    	return view('login_info', compact('user'));
    }
    
    public function updateProfile(){
        $user = Auth::user();
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
    }
}