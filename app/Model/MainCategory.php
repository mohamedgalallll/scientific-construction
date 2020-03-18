<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class MainCategory extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $appends = ['first_image'];
    protected $fillable = [
        'name',
        'description',
        'keyword',
        'status',
    ];

    public function getFirstImageAttribute()
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
