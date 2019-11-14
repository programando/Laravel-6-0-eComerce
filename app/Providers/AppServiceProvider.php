<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ShoppingCart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //  $sessionName      = 'shopping_cart_id';
        //  $shopping_cart_id = Session::get($sessionName);
        //  $shopping_cart    = ShoppingCart::findOrCreateById ( $shopping_cart_id );

        //  Session::put( $sessionName,  $shopping_cart->id );


    }

    /**
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
