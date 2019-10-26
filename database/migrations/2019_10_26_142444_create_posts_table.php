<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('post_title');
            $table->dateTime('post_date_time')->default(date("y-m-d H:i:s"));
            $table->string('post_image')->nullable();
            $table->text('post_content')->default("");
            $table->string('post_tags')->default("");
            $table->string('post_status')->default("");
            $table->integer('post_view_count')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
