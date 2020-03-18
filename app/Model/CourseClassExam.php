<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseClassExam extends Model
{
    protected $fillable = [
        'question',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'correct_answer',
        'status',
        'course_id',
        'course_class_id',
    ];
}
