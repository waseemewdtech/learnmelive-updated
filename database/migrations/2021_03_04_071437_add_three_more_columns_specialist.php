<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThreeMoreColumnsSpecialist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialists', function (Blueprint $table) {
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->text('languages')->nullable();
            $table->text('specifications')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('specialists', ['address','description','languages','specifications']))
        {
            Schema::table('specialists', function (Blueprint $table)
            {
                $table->dropColumn(['address','description','languages','specifications']);
            });
        }
    }
}
