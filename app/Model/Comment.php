<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{
    protected $appends = ['user_name','blog_name'];
    protected $fillable = [
        'user_id',
        'blog_id',
        'comment',
    ];
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function getUserNameAttribute()
    {
        $attribute='';
        if ($this->user()){
            $attribute = $this->user->name;
        }
        return $attribute;
    }
    public function blog(){
        return $this->hasOne(Blog::class,'id','blog_id');
    }
    public function getBlogNameAttribute()
    {
        $attribute='';
        if ($this->blog()){
            $attribute = $this->blog->title;
        }
        return $attribute;
    }
}
