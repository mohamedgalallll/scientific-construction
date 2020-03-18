<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public $timestamps = false;
    protected $appends = ['main_logo'];
    protected $fillable = [
        'title_ar',
        'fullName',
        'address',
        'mail',
        'mobileNumber',
        'fax',
        'androidUrl',
        'iosUrl',
        'facebookUrl',
        'googleUrl',
        'linkedInUrl',
        'twitterUrl',
        'instagramUrl',
        'youtubeUrl',
        'gitHupUrl',
        'logo',
        'footerLogo',
        'icon',
        'keyWords_ar',
        'description_ar',
    ];

    public function getMainLogoAttribute()
    {
        $attribute = '';
        if (!empty($this->logo)){
            $attribute =url('storage' .$this->logo) ;
        }else{
            $attribute = url("design/admin/img/logo.png");
        }
        return $attribute;
    }
    public function getMainFooterLogoAttribute()
    {
        $attribute = '';
        if (!empty($this->footerLogo)){
            $attribute =url('storage' .$this->footerLogo) ;
        }else{
            $attribute = url("design/admin/img/footer_logo.png");
        }
        return $attribute;
    }

    public function getMainIconAttribute()
    {
        $attribute = '';
        if (!empty($this->icon)){
            $attribute =url('storage' .$this->icon) ;
        }else{
            $attribute = url("design/admin/img/icon.png");
        }

        return $attribute;
    }

    public function getSiteDescriptionAttribute(){
        $attribute = $this->description_ar;
        return $attribute;
    }

    public function getSiteKeyWordsAttribute(){
        $attribute=$this->keyWords_ar;
        return $attribute;
    }

    public function getSiteTitleAttribute(){
        $attribute=$this->title_ar;
        return $attribute;
    }

}
