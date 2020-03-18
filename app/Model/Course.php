<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Course extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $appends = ['image','instructor_name','description_excerpt','number_of_lectures'];
    protected $fillable = [
        'name',
        'description',
        'keyword',
        'status',
        'instructor_id',
        'main_category_id',
    ];

    public function instructor(){
        return $this->hasOne(Instructor::class,'id','instructor_id');
    }
    public function getInstructorNameAttribute()
    {
        $attribute='';
        if ($this->instructor()){
            $attribute = $this->instructor->name;
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
    public function getDescriptionExcerptAttribute()
    {
        $attribute = Str::words($this->description, 4, '...');
        return $attribute;
    }
    public function getNumberOfLecturesAttribute()
    {
        $attribute = '---';

        return $attribute;
    }
    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('images')
            ->singleFile();
    }
}
