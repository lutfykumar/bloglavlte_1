<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table){
            // our schema is defined in here
            $table->increments('id');
            $table->integer('on_post') -> unsigned() ->default(0);
            $table->foreign('on_post')
                    ->references('id')->on('posts')
                    ->onDelete('cascade');
            $table->integer('from_user') -> unsigned() ->default(0);
            $table->foreign('from_user')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->text('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //delete comments table
        schema::drop('comments');

    }
}
