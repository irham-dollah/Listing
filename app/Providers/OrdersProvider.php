<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OrdersProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('orders', function($app)
        {
            $storage = $app['session'];
            $events = $app['events'];
            $instanceName = 'order_cart';
            $session_key = '88uuiioo99888';

            return new Cart(
                $storage,
                $events,
                $instanceName,
                $session_key,
                config('shopping_cart')
            );
        });
    }
}
