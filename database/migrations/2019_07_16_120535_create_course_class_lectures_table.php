<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseClassLecturesTable extends Migration
{
    public function up()
    {
        Schema::create('course_class_lectures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('book')->nullable();
            $table->longText('explained')->nullable();
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
        Schema::dropIfExists('course_class_lectures');
    }
}
