<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->foreignId('order_id');
            $table->foreignId('product_id');

            $table->integer('quantity');
            $table->integer('full_price'); // price_for_one_product * quantity

            $table->foreign('order_id')->references('id')->on('orders')
                ->cascadeOnDelete();
            $table->foreign('product_id')->references('id')->on('products')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
