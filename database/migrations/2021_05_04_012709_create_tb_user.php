<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',['seller','buyer'])->default('buyer');
            $table->string('username',100);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',50);
            $table->string('password');
            $table->string('phone',15);
            $table->string('picture',150)->nullable();
            $table->string('dob',20)->nullable();
            $table->enum('gender',['male','female','other'])->default('male');
            $table->string('country');
            $table->string('remember_token')->nullable();
            $table->enum('profile_complete',[0,1])->default(0);
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->string('languages')->nullable();
            $table->longText('tools')->nullable();
            $table->enum('approve',[0,1])->default(0);
            $table->string('token')->nullable();
            $table->enum('state',['offline','online'])->default('offline');
            $table->string('rating',10)->default(0);
            $table->integer('count')->default(0);
            $table->enum('notification',['off','on'])->default('on');
            $table->string('timezone',50)->default('America/Chicago');
            $table->string('account_id',50)->nullable();
            $table->string('payment_type')->nullable();
            $table->string('ssn',10)->nullable();
            $table->string('google_id',50)->nullable();
            $table->string('fb_id',50)->nullable();
            $table->string('last_login')->default(0);
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
        Schema::dropIfExists('tb_user');
    }
}