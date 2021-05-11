<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->foreign('buyer_id')->references('id')->on('tb_user')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('tb_user')->onDelete('cascade');
            $table->string('buyer_name',50);
            $table->string('seller_name',50);
            $table->string('buyer_picture',150);
            $table->string('seller_picture',150);
            $table->string('service_name',50)->nullable();
            $table->string('service_time',10)->nullable();
            $table->string('service_date',20)->nullable();
            $table->string('service_cost',10)->nullable();
            $table->longText('description')->nullable();
            $table->string('state',5)->nullable();
            $table->longText('reason')->nullable();
            $table->longText('review')->nullable();
            $table->string('rating',5)->default(0);
            $table->string('possible',10)->nullable();
            $table->string('paystate',5)->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_id')->nullable();
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
        Schema::dropIfExists('tb_booking');
    }
}
