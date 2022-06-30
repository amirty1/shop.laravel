<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('attribute_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->on('attributes')->references('id')->cascadeOnDelete();
            $table->string('value');
            $table->timestamps();
        });

        //pivot Table
        Schema::create('attribute_product', function (Blueprint $table) {
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->on('attributes')->references('id')->cascadeOnDelete();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->on('products')->references('id')->cascadeOnDelete();
            $table->unsignedBigInteger('value_id');
            $table->foreign('value_id')->on('attribute_values')->references('id')->cascadeOnDelete();

            $table->primary(['attribute_id','product_id','value_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_product');
        Schema::dropIfExists('attribute_values');
        Schema::dropIfExists('attributes');
    }
}
