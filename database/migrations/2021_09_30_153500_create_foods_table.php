<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('food_type_id');
            $table->string('name', 100);
            $table->float('price', 5,2);
            $table->text('description');
            $table->text('ingredients');
            $table->boolean('visible');
            $table->string('image');
            $table->string('additional_details')->nullable();
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
        Schema::dropIfExists('foods');
    }
}
