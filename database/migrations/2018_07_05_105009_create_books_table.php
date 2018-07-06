<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_url')->nullable(true);
            $table->string('author')->nullable(true);
            $table->string('title')->nullable(true);
            $table->string('comment')->nullable(true);
            $table->integer('recommend')->nullable(true);
            $table->integer('tradable')->nullable(true);
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();
            
            //外部キーの設定
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
