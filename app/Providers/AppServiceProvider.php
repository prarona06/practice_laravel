<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use App\Models\Customer;
use App\Observers\CusmoterObserver;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Customer::observe(CusmoterObserver::class);
    }
}
