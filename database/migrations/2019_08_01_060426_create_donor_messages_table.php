<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 60);
            $table->string('email', 60);
            $table->string('subject');
            $table->string('mobile_no', 30);
            $table->text('message');
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
        Schema::dropIfExists('donor_messages');
    }
}
