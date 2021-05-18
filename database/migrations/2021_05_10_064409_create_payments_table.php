<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('specialist_id');
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('bid_id')->nullable();
            $table->string('received_amount');
            $table->enum('p_status',['pending','released','specialist_request','paid'])->default('pending');
            $table->enum('release_status',['pending','released'])->default('pending');
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
        Schema::dropIfExists('payments');
    }
}
