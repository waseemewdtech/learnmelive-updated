<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisputeRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispute_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dispute_id');
            $table->longText('reply')->nullable();
            $table->unsignedBigInteger('sender_id'); 
            $table->unsignedBigInteger('reciever_id');
            $table->string('file_type')->nullable();
            $table->string('file_link')->nullable();
            $table->string('user_type')->nullable();
            $table->string('reciever_seen')->default(0);
            $table->foreign('dispute_id')->references('id')->on('client_specialist_disputes')->onDelete('cascade');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reciever_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('dispute_replies');
    }
}
