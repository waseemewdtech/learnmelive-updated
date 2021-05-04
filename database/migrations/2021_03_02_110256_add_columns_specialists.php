<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsSpecialists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialists', function (Blueprint $table) {
            $table->string('payment_method')->after('opening_hours');
            $table->string('payment_email')->after('payment_method')->nullable();
            $table->string('payment_name')->after('payment_email')->nullable();
            $table->string('payment_birth_date')->after('payment_name')->nullable();
            $table->string('payment_phone')->after('payment_birth_date')->nullable();
            $table->string('payment_ssn')->after('payment_phone')->nullable();

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
