<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_id');
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->longText('content');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->boolean('featured_post')->default(0);
            $table->string('image');
            $table->string('image_caption', 160)->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
}
