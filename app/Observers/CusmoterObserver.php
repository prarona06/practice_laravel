<?php

namespace App\Observers;

use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CusmoterObserver
{
    /**
     * Handle the Customer "created" event.
     */

    public function creating(Customer $customer): void
    {
        $customer->who_created = "jonh doe";
    }

    public function created(Customer $customer): void
{

//$customer->who_created = auth()->user()->name;//authentication er somoy niye asbe
Log::info('Customer created by jonh doe');

}







    /**
     * Handle the Customer "updated" event.
     */
    public function updated(Customer $customer): void
    {
        //
    }

    /**
     * Handle the Customer "deleted" event.
     */
    public function deleted(Customer $customer): void
    {
        //
    }

    /**
     * Handle the Customer "restored" event.
     */
    public function restored(Customer $customer): void
    {
        //
    }

    /**
     * Handle the Customer "force deleted" event.
     */
    public function forceDeleted(Customer $customer): void
    {
        //
    }
}
