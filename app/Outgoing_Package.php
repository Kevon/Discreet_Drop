<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outgoing_Package extends Model
{
    protected $table = 'outgoing_packages';
    protected $guarded = ['*'];
    
    public function Shipment(){
    	return $this->belongsTo(Shipment::class, 'shipment_ID');
    }
    
    public function DD_Info(){
    	return $this->hasOne(DD_Info::class, 'dd_info_ID');
    }
    
    public function Box(){
    	return $this->hasOne(Box::class, 'box_ID');
    }
}
