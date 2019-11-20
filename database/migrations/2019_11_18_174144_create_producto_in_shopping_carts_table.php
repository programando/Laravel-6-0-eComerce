<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_in_shopping_carts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('product_id')->unsigned();
            $table->foreing('product_id')->references('id')->on('products');

            $table->integer('shopping_cart_id')->unsigned();
            $table->foreing('shopping_cart_id')->references('id')->on('shopping_carts');

            $table->integer('amount')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_in_shopping_carts');
    }
}
