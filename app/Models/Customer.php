<?php

namespace App\Models;
use App\Models\Scopes\OnlyActiveCustomers;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
use SoftDeletes;
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_email',
    ];
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
    public function scopeInactive($query)
    {
        return $query->where('status', 'inactive');
    }
    protected static function booted()
    {
        static::addGlobalScope(new OnlyActiveCustomers);
    }

}
