<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::enableForeignKeyConstraints();
      Schema::create('reviews', function (Blueprint $table) {
        
          $table->increments('id');
          $table->integer('user_id')->unsigned(10);
          $table->string('tagligne');
          $table->integer('restaurant_id')->unsigned(10);
          $table->text('content');
          $table->float('rating');
          $table->timestamps();
      });
      Schema::table('reviews', function($table){
        $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
