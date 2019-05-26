<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_id');
            $table->string('slug');
            $table->string('role', 30);
            $table->string('doctor_name', 60);
            $table->string('education_details');
            $table->string('org_name', 160);
            $table->string('speciality', 60);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('days', 30);
            $table->string('experience');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
