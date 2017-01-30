<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DD_Info extends Model
{
    protected $table = 'dd_info';
    protected $guarded = ['*'];
    
    public function Outgoing_Packages(){
    	return $this->belongsTo(Outgoing_Package::class, 'dd_info_ID');
    }
}
