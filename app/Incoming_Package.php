<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incoming_Package extends Model
{
    protected $table = 'incoming_packages';
    protected $guarded = ['*'];
    
    public function User(){
    	return $this->belongsTo(User::class, 'dd_code', 'dd_code');
    }
    
    public function Order(){
    	return $this->belongsTo(Order::class, 'order_ID');
    }
}
