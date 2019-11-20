<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoInShoppingCart extends Model
{

      protected $table = "product_in_shopping_carts";
      protected $fillable = ['product_id', 'shopping_cart_id'];

}
