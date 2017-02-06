<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use App\User;
use App\DD_Info;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){
        return view('landing');
    }
    
    public function dashboard(){
        $user = Auth::user();
        $dd_info = DD_Info::where('active', 'YES')->first(); 
    	return view('dashboard', compact('user', 'dd_info'));
    }
    
    public function tutorial(){
    	return view('tutorial');
    }
    
    public function profile(){
        $user = Auth::user();
    	return view('profile', compact('user'));
    }
    
    public function updateProfile(){
        $user = Auth::user();
    }
    
    public function addOrder(){
        $user = Auth::user();
    }
}