<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index();
            $table->string('product_code')->unique();
            $table->string('title');
            $table->string('price');
            $table->longText('description')->nullable();
            $table->integer('qty');
            $table->enum('rating', ['0', '1', '2', '3', '4', '5']);
            $table->enum('show_in_slider', ['0', '1']);
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
        Schema::dropIfExists('products');
    }
}
