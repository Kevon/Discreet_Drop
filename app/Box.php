<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $table = 'boxes';
    protected $guarded = ['*'];
    
    public function Outgoing_Packages(){
    	return $this->belongsTo(Outgoing_Package::class, 'box_ID');
    }
}
