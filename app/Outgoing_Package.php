<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outgoing_Package extends Model
{
    protected $table = 'outgoing_packages';
    protected $guarded = ['*'];
}
