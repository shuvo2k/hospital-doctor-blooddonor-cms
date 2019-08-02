<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->string('role', 25);
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('email', 60);
            $table->integer('mobile_no');
            $table->string('password');
            $table->string('status')->default('Active');
            $table->string('religion', 30)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('height', 60)->nullable();
            $table->string('weight', 60)->nullable();
            $table->string('blood_group', 25)->nullable();
            $table->string('country', 60)->nullable();
            $table->string('city', 60)->nullable();
            $table->string('area', 60)->nullable();
            $table->string('image')->nullable()->default('media/user_avatar/default.png');
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
        Schema::dropIfExists('users');
    }
}
