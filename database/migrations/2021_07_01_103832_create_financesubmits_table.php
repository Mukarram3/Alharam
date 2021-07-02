<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financesubmits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('financeid');
            $table->string('mobile');
            $table->string('notes');
            $table->string('username');
            $table->foreign('financeid')->references('id')->on('finances')->onDelete('cascade');
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
        Schema::dropIfExists('financesubmits');
    }
}
