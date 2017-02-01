<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'deleted_at', 'role', 'dd_code', 'stripe_id', 'stripe_default_source'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'deleted_at',
    ];
    
    protected $attributes = [
        'role' => 'user',
    ];
    
    public function Orders(){
    	return $this->hasMany(Order::class, 'user_ID');
    }
    
    public function Incoming_Packages(){
    	return $this->hasMany(Incoming_Package::class, 'dd_code', 'dd_code');
    }
}
