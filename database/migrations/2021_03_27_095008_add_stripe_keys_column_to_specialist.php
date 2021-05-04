<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStripeKeysColumnToSpecialist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialists', function (Blueprint $table) {
            $table->longText('stripe_public_key')->nullable();
            $table->longText('stripe_secrete_key')->nullable();
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
