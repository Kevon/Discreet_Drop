<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $guarded = ['*'];
    
    protected $hidden = ['deleted_at'];
}
