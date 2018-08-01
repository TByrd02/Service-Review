<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Operations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::enableForeignKeyConstraints();
      Schema::create('operations', function (Blueprint $table) {
        
          $table->increments('id');
          $table->enum('days', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'])->default('Monday');
          $table->integer('restaurant_id')->unsigned(10);
          $table->timestamp('opening')->nullable();
          $table->timestamp('closing')->nullable();
          $table->timestamps();
      });

      Schema::table('operations', function($table){

        $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
