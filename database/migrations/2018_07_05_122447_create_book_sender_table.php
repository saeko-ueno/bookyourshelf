<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_sender', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsigned()->index();
            $table->integer('book_id')->unsigned()->index();
            $table->timestamps();
 
             //外部キーの設定
            $table->foreign('sender_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('books');
            
            $table->unique(['sender_id', 'book_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_sender');
    }
}
