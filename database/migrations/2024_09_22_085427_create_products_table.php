<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Product name
            $table->string('description')->nullable(); // Product description
            $table->decimal('price', 8, 2); // Product price
            $table->string('image1')->nullable(); // Path to the first image
            $table->string('image2')->nullable(); // Path to the second image
            $table->string('image3')->nullable(); // Path to the third image
            $table->string('image4')->nullable(); // Path to the fourth image
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
