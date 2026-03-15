<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
//use SoftDeletes;
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_email',
    ];
}
