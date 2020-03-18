<?php

namespace App\Model;

use FFMpeg\FFMpeg;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class CourseClass extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $appends = ['course_name','number_of_questions'];
    protected $fillable = [
        'title',
        'status',
        'course_id',
    ];

    public function course(){
        return $this->hasOne(Course::class,'id','course_id');
    }

    public function getCourseNameAttribute()
    {
        $attribute='';
        if ($this->course()){
            $attribute = $this->course->name;
        }
        return $attribute;
    }
    public function getNumberOfQuestionsAttribute()
    {
        $attribute='0';

        return $attribute;
    }
//    public function registerMediaConversions(Media $media = null)
//    {
//        $this->addMediaConversion('thumb')
//            ->width(368)
//            ->height(232)
//            ->extractVideoFrameAtSecond(20)
//            ->performOnCollections('videos');
//    }
//    public function registerMediaConversions(Media $media = null)
//    {
////        FFMpeg::create();
////        $this->addMediaConversion('thumb')
////            ->width(368)
////            ->height(232)
////            ->sharpen(10);
//    }
//    public function registerMediaConversions()
//    {
//        $ffmpeg = FFMpeg\FFMpeg::create();
//        $this->addMediaConversion('thumb')
//            ->width(368)
//            ->height(232)
//            ->extractVideoFrameAtSecond(20)
//            ->performOnCollections('videos');
//    }

}
