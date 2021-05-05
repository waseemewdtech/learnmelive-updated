<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAvailabletime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_availabletime', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('mon')->default('Closed');
            $table->string('tue')->default('Closed');
            $table->string('wed')->default('Closed');
            $table->string('thr')->default('Closed');
            $table->string('fri')->default('Closed');
            $table->string('sat')->default('Closed');
            $table->string('sun')->default('Closed');
            $table->foreign('user_id')->references('id')->on('tb_user')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tb_availabletime');
    }
}
