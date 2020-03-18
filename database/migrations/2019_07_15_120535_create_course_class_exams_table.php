<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseClassExamsTable extends Migration
{
    public function up()
    {
        Schema::create('course_class_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->text('answer_1')->nullable();
            $table->text('answer_2')->nullable();
            $table->text('answer_3')->nullable();
            $table->text('answer_4')->nullable();
            $table->text('correct_answer')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->bigInteger('course_class_id')->unsigned();
            $table->foreign('course_class_id')->references('id')->on('course_classes')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('course_class_exams');
    }
}
