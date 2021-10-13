<?php

namespace App\Providers;

use Braintree;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        $gateway = new Braintree\Gateway([
            'environment' => env('BTREE_ENV'),
            'merchantId' => env('MERCHANT_ID'),
            'publicKey' => env('PUBLIC_KEY'),
            'privateKey' => env('PRIVATE_KEY'),
        ]);
    }
}
