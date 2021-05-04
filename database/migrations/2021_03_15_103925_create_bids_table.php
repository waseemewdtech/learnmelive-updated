<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_request_id')->nullable();
            $table->foreign('service_request_id')->references('id')->on('service_requests')->onDelete('cascade');
            $table->unsignedBigInteger('specialist_id')->nullable();
            $table->foreign('specialist_id')->references('id')->on('specialists')->onDelete('cascade');
            $table->string('budget');
            $table->string('delivery');
            $table->string('attachment')->nullable();
            $table->longText('perposal')->nullable();
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
        Schema::dropIfExists('bids');
    }
}
