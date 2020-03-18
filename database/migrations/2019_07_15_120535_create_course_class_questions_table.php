<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseClassQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('course_class_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->text('answer')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->bigInteger('course_class_id')->unsigned();
            $table->foreign('course_class_id')->references('id')->on('course_classes')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('course_class_questions');
    }
}
