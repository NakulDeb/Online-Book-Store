<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_phone')->nullable();
            $table->string('user_Address')->nullable();
            $table->string('user_Region')->nullable();
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
        Schema::dropIfExists('tbl_users');
    }
}
