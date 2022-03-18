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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoryID');
            $table->string('Food_Name');
            $table->string('Food_Excerpt');
            $table->string('Recipes_Excerpt');
            $table->string('Recipes');
            $table->string('image')->nullable();
            $table->string('Cooking_Level');
            $table->string('Cooking_Image');
            $table->string('Rating')->nullable();
            $table->integer('Total_Rating')->nullable();
            $table->integer('Total_like')->default(0);
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
        Schema::dropIfExists('food');
    }
};
