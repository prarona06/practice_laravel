<?php

namespace App\Models;
use App\Models\Scopes\OnlyActiveCustomers;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;




class Customer extends Model
{
use SoftDeletes;
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_email',
    ];
/**
 * Scope a query to only include active customers.
 *
 * @param \Illuminate\Database\Eloquent\Builder $query
 * @return \Illuminate\Database\Eloquent\Builder
 */
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
 public function customer_detail(): HasOne{
    return $this->hasOne(CustomerDetail::class, 'customer_id' , 'id');   //(foreignkey,localkey)
 }

}

