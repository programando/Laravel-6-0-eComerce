<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoInShoppingCart ;
class ProductInShoppingCartController extends Controller
{

    public function __construct() {
            // Middleware creaado para alamacenanr en el request el contenido del carrito
            $this->middleware("shopping.cart");
    }

    public function store( Request $request) {


        $in_shopping_cart = ProductoInShoppingCart::create([
            'shopping_cart_id' => $request->shopping_cart->id,
            'product_id'     => $request->product_id

            ]);
           if (  $in_shopping_cart ) {
               return redirect()->back();
           }

           return redirect()->back()->witErrors(['producto' => 'no se pudo crear el producto']);

        }

        public function destoy( $id) {
            //
        }

}
