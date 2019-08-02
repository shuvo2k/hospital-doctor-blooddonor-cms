<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('hospital_name');
            $table->string('blood_group', 25);
            $table->date('want_date');
            $table->date('delete_date')->nullable();
            $table->string('country', 60);
            $table->string('city', 60);
            $table->string('area', 60);
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
        Schema::dropIfExists('blood_posts');
    }
}
