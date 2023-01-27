<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('size');
            $table->string('color');
            $table->string('car_name');
            $table->longText('description');
            $table->longText('image');
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
        Schema::dropIfExists('parts');
    }
};

// DB::table('parts')->insert(['name'=>'Steering Wheel', 'size'=>37, 'color'=>'brown-black', 'car_name'=>'Fiat 500', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nam suscipit saepe nesciunt earum ut, sint dolorum assumenda qui libero.', 'image'=>'https://www.riauto.ch/content/images/thumbs/0005393_holzlenkrad-nardi-classico.jpeg']);