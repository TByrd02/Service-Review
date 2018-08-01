<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Restaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
       Schema::enableForeignKeyConstraints();
        Schema::create('restaurants', function(Blueprint $table){
          $table->increments('id');
          $table->string('display_name');
          $table->decimal('rating');
          $table->string('address');
          $table->string('city');
          $table->string('website');
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
        Schema::dropIfExists('restaurants');
    }
}
