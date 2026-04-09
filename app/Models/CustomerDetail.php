<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $table = 'customers_details';

public function customer()
{
    return $this->belongsTo(Customer::class, 'customer_id');
}
}
