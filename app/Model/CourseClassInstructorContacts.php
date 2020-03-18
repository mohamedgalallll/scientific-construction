<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseClassInstructorContacts extends Model
{
    protected $appends = ['course_name','class_name','user_name','instructor_name'];
    protected $fillable = [
        'question',
        'answer',
        'status',
        'course_id',
        'course_class_id',
        'instructor_id',
        'user_id',
    ];
    public function course(){
        return $this->hasOne(Course::class,'id','course_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function class(){
        return $this->hasOne(CourseClass::class,'id','course_class_id');
    }
    public function getUserNameAttribute()
    {
        $attribute='';
        if ($this->user()){
            $attribute = $this->user->name;
        }
        return $attribute;
    }
    public function getInstructorNameAttribute()
    {
        $attribute='';
        if ($this->course()){
            $attribute = $this->course->instructor_name;
        }
        return $attribute;
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
