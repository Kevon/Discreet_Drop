<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $table = 'charges';
    protected $guarded = ['*'];
    
    public function Shipment(){
    	return $this->belongsTo(Shipment::class, 'shipment_ID');
    }
}
