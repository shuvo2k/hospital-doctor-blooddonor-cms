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
            $table->string('type', 50);
            $table->string('doctor_name', 60);
            $table->string('education_details');
            $table->string('org_name', 160);
            $table->string('speciality', 60);
            $table->string('start_time', 20);
            $table->string('visiting_place', 200);
            $table->string('floor_number', 20);
            $table->string('room_number', 20);
            $table->string('end_time', 20);
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
