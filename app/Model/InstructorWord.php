<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class InstructorWord extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $appends = ['instructor_name','instructor_image'];
    protected $fillable = [
        'words',
        'instructor_id',
    ];
   
    public function instructor()
    {
        return $this->hasOne(Instructor::class, 'id', 'instructor_id');
    }
 
    public function getInstructorDataAttribute()
    {
        $attribute = '';
        if ($this->instructor()) {
            $attribute = $this->instructor;
        }
        return $attribute;
    }
    public function getInstructorNameAttribute()
    {
        $attribute = '';
        if ($this->instructor()) {
            $attribute = $this->instructor->name;
        }
        return $attribute;
    }
    public function getInstructorImageAttribute()
    {
        $attribute = '';
        if ($this->instructor()) {
            $attribute = $this->instructor->image;
        }
        return $attribute;
    }
}
