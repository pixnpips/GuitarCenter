<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Customer;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Cashier::useCustomerModel(Customer::class);
    }
}
