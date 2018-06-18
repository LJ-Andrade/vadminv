<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('port_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('port_categories');
    }
}
