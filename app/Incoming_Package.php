<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incoming_Package extends Model
{
    protected $table = 'incoming_packages';
    protected $guarded = ['*'];
}
