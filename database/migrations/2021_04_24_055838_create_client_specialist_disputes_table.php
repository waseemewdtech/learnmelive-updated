<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSpecialistDisputesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_specialist_disputes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_id');
            $table->string('project_type');
            $table->string('sender_id');
            $table->string('reciever_id');
            $table->string('subject');
            $table->longText('comment');
            $table->string('file_type')->nullable();
            $table->string('file_link')->nullable();
            $table->string('reciever_seen')->default(0);
            $table->string('admin_seen')->default(0);
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
        Schema::dropIfExists('client_specialist_disputes');
    }
}
