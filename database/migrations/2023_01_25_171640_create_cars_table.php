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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->longText('description');
            $table->longText('image');
            $table->boolean('published')->default(false);
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
        Schema::dropIfExists('cars');
    }
};


// DB::table('cars')->insert(['name'=>'Fiat 500', 'price'=>17000, 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nam suscipit saepe nesciunt earum ut, sint dolorum assumenda qui libero.', 'image'=>'https://www.b92.net/news/pics/2020/03/04/14219322015e5feddb9bc47839965533_orig.jpg', 'published'=>false]);