<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();


            $table->foreignId('vendor_id');
            $table->foreignId('category_id');

            $table->text('product_name');
            $table->longText('desc');

            $table->float('current_price');
            $table->float('old_price');

            $table->boolean('availability_status');
            $table->boolean('sale_status')->default('0');




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
