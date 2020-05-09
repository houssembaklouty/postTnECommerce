<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->string('name');
            $table->string('reference')->nullable()->default(0);
            $table->string('type')->nullable();
            $table->double('price');
            $table->smallInteger('stock')->nullable()->default(10);
            $table->float('discount')->nullable()->default(0);
            $table->longText('description')->nullable();
            $table->string('img');
            $table->smallInteger('category_id')->nullable()->default(0);
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
        Schema::drop('products');
    }
}
