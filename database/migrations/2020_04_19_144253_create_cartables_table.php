<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartables', function (Blueprint $table) {
            $table->id();
            $table->integer('totalQty');
            $table->bigInteger('totalPrice');
            $table->integer('user_id');
            $table->tinyInteger('cart_type');  //    0: cart       1: later cart
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
        Schema::dropIfExists('cartables');
    }
}
