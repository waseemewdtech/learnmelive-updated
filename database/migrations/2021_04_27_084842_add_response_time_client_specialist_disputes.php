<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResponseTimeClientSpecialistDisputes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_specialist_disputes', function (Blueprint $table) {
            $table->string('client_response')->after('admin_seen')->nullable();
            $table->string('specialist_response')->after('client_response')->nullable();
            $table->string('admin_response')->after('specialist_response')->nullable();
            $table->string('status')->after('admin_response')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_specialist_disputes', function (Blueprint $table) {
            //
        });
    }
}
