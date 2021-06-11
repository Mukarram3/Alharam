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
            $table->unsignedBigInteger('vehicleId');
            $table->string('title');
            $table->integer('price');
            $table->text('image');
            $table->text('description');
            $table->string('engine_cap');
            $table->integer('seat_cap');
            $table->integer('doors');
            $table->string('fuel_type');
            $table->string('transm_type');
            $table->string('version');
            $table->string('colours');
            $table->foreign('vehicleId')->references('id')->on('vehicleCategories')->onDelete('cascade');
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
