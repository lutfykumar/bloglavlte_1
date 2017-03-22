<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
            // our schema is defined in here
            $table->increments('id'); // table id
            $table->integer('author_id') -> unsigned() ->default(0);
            $table->foreign('author_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->string('title')->unique();
            $table->text('description');
            $table->text('body');
            $table->string('slug')->unique();
            $table->string('images');
            $table->string('active');
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
        Schema::drop('posts');
    }
}
