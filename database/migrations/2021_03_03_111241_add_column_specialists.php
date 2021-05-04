<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSpecialists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialists', function (Blueprint $table) {
            $table->string('payment_first_name')->nullable();
            $table->string('payment_last_name')->nullable();
           $table->string('public_profile')->nullable();
           $table->string('account_number')->nullable();
           $table->string('routing_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialists', function (Blueprint $table) {
            //
        });
    }
}
