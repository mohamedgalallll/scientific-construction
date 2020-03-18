<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateInstructorWordsTable extends Migration
{
    public function up()
    {
        Schema::create('instructor_words', function (Blueprint $table) {
            $table->increments('id');
            $table->text('words')->nullable();
            $table->integer('instructor_id')->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->integer('status')->default(0)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('instructor_words');
    }
}
