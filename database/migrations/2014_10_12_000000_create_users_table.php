<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id')->unique();
            $table->string('user_name')->unique();
            $table->string('password', 60);
            $table->string('real_name');
            $table->integer('user_unit');
            $table->string('user_position');
            $table->string('office_phone');
            $table->string('mobile_phone');
            $table->smallInteger('role');
            $table->smallInteger('com_number');
            $table->string('active');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            //$table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
