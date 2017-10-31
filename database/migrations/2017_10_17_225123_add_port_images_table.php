<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortImagesTable extends Migration
{
    public function up()
    {
        Schema::create('port_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('article_id')->unsigned();

            $table->foreign('article_id')->references('id')->on('port_articles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('port_images');
    }
}
