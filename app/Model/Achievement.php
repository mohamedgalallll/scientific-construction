<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
class Achievement extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $appends = ['image'];
    protected $fillable = [
        'title',
        'description',
    ];
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
