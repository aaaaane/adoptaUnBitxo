<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('age');
            $table->text('gender');
            $table->text('sterilized');
            $table->text('size')->nullable();
            $table->text('type');
            $table->text('comment');
            $table->text('adopcio_id')->nullable();
            $table->text('visible');
            $table->text('image');
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('image4')->nullable();
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
         Schema::drop('animals');
     }
}
