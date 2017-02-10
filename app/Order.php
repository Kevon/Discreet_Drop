<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $guarded = ['*'];
    
    protected $hidden = ['deleted_at'];
    
    public function Incoming_Package(){
    	return $this->hasOne(Incoming_Package::class, 'id');
    }
    
    public function Shipment(){
    	return $this->hasOne(Shipment::class, 'id');
    }
    
    public function User(){
    	return $this->belongsTo(User::class, 'user_id');
    }
}
