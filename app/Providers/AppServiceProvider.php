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


    }

    /**
     *
     * @return void
     */
    public function boot()
    {

        /*
        * Nov 15 2019
        * Un View Composer es un método que se ejecuta cada vez que llamamos a una vista,
        * puede ser muy útil a la hora de querer mostrar información común en varios métodos
        *sin tener que repetir muchas líneas de código dentro de todos los controladores.
        *=====================================================================================
        * Con este código logramos que el carrito esté disponible en todas las vistas
       */
        View::composer('*', function ( $view ){
            $sessionName      = 'shopping_cart_id';
            $shopping_cart_id = Session::get($sessionName);
            $shopping_cart    = ShoppingCart::findOrCreateById ( $shopping_cart_id );
            Session::put( $sessionName,  $shopping_cart->id );
            $view->with('productsCount',$shopping_cart->productosCount()  );
         });



    }
}
