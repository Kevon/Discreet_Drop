<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = 'shipments';
    protected $guarded = ['*'];
    
    public function Order(){
    	return $this->hasOne(Order::class, 'order_id');
    }
    
    public function Charges(){
    	return $this->hasMany(Charge::class, 'shipment_id');
    }
    
    public function Outgoing_Packages(){
    	return $this->hasMany(Outgoing_Package::class, 'shipment_id');
    }
}
