<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Blog extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $appends = ['image','course_name'];
    protected $table='notifications';
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'course_id',
    ];
    public function course(){
        return $this->hasOne(Course::class,'id','course_id');
    }

    public function getCourseNameAttribute()
    {
        $attribute='---';
        if ($this->course){
            $attribute = $this->course->name;
        }
        return $attribute;
    }
    public function getImageAttribute()
    {
        $attribute = Settings::first()->main_icon;
        $image = $this->getFirstMedia('images');
        if ($image) {
            $attribute = strtok($image->getFullUrl(), "?");
        }
        return $attribute;
    }
    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('images')
            ->singleFile();
    }
}
