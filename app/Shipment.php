<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = 'shipments';
    protected $guarded = ['*'];
    
    public function Order(){
    	return $this->belongsTo(Order::class, 'order_id');
    }
    
    public function Charges(){
    	return $this->hasMany(Charge::class, 'shipment_id');
    }
    
    public function Latest_Charge(){
    	return $this->hasOne(Charge::class, 'shipment_id')->latest();
    }
    
    public function Outgoing_Packages(){
    	return $this->hasMany(Outgoing_Package::class, 'shipment_id');
    }
    
    public function Latest_Outgoing_Package(){
    	return $this->hasOne(Outgoing_Package::class, 'shipment_id')->latest();
    }
}
