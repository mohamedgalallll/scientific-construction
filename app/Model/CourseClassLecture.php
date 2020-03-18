<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseClassLecture extends Model
{
    protected $appends = ['course_name','class_name'];
    protected $fillable = [
        'title',
        'book',
        'explained',
        'status',
        'course_id',
        'course_class_id',
    ];
    public function course(){
        return $this->hasOne(Course::class,'id','course_id');
    }
    public function class(){
        return $this->hasOne(CourseClass::class,'id','course_class_id');
    }

    public function getClassNameAttribute()
    {
        $attribute='';
        if ($this->class()){
            $attribute = $this->class->title;
        }
        return $attribute;
    }
    public function getCourseNameAttribute()
    {
        $attribute='';
        if ($this->course()){
            $attribute = $this->course->name;
        }
        return $attribute;
    }
}
