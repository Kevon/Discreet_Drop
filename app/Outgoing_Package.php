<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outgoing_Package extends Model
{
    protected $table = 'outgoing_packages';
    protected $guarded = ['*'];
    
    public function Shipment(){
    	return $this->belongsTo(Shipment::class, 'shipment_id');
    }
    
    public function DD_Info(){
    	return $this->hasOne(DD_Info::class, 'id', 'dd_info_id');
    }
    
    public function Box(){
    	return $this->hasOne(Box::class, 'id', 'box_id');
    }
}
