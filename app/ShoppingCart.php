<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public static function findOrCreateById ( $shopping_cart_id ){

        if ( $shopping_cart_id  ){
            return ShoppingCart::find($shopping_cart_id  );
        }else{

            return ShoppingCart::create();
        }
    }

    /*  * Nov 19 2019
        *Con esta relación puedo obtener los productos que contine un carrito.
        *   Tambíen es posible hacer esto mediante una consulta, sin emabargo este método
        *   Me permite operarlo para, por ejemplo, obtener la cantidad de productos del carrito
    */
    public function products() {
        return $this->belongsToMany('App\Product','product_in_shopping_carts');
    }

    public function productosCount(){
        return $this->products()->count();
    }

}
