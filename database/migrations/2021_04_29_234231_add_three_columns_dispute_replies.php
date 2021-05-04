<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThreeColumnsDisputeReplies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dispute_replies', function (Blueprint $table) {
            $table->string('client_seen','1')->after('reciever_seen')->default(0);
            $table->string('specialist_seen','1')->after('client_seen')->default(0);
            $table->string('admin_seen','1')->after('specialist_seen')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dispute_replies', function (Blueprint $table) {
            //
        });
    }
}
