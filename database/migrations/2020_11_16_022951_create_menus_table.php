<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
   
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id');
            $table->string('name');
            $table->string('icon');
            $table->string('url');
            $table->bigInteger('is_active');
            $table->bigInteger('order');
            $table->foreignId('menutitle_id');
            $table->timestamps();
            $table->foreign('menutitle_id')->references('id')->on('menutitles')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
