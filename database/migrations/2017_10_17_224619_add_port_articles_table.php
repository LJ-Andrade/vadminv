<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('port_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->enum('status', ['active','paused'])->default('active');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('slug')->unique();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('port_categories')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('port_articles');
    }
}
