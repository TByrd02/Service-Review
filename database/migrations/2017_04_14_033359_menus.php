<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('menus', function (Blueprint $table) {
        
          $table->increments('id');
          $table->string('display_name');
          $table->string('picture')->nullable();
          $table->enum('size', ['Small', 'Medium', 'Large'])->default('Small');
          $table->decimal('price');
          $table->text('description');
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
        Schema::dropIfExists('menus');
    }
}
