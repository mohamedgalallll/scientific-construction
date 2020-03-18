<?php

namespace App\Model;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $appends = ['admin_group_name'];
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'country_id',
        'city_id',
        'social_media_id',
        'social_media_type',
        'is_activated',
        'active_hash',
        'admin_group',
        'user_type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group_id()
    {
        return $this->hasOne(AdminGroup::class, 'id', 'admin_group');
    }

    public function group()
    {
        return $this->hasOne(AdminGroup::class, 'id', 'admin_group');
    }

    public function county()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function getCountryNameAttribute()
    {

        $attribute = '';
        if ($this->county) {
            $attribute = $this->county->name;
        }
        return $attribute;
    }

    public function getAdminGroupNameAttribute()
    {

        $attribute = '';
        if ($this->admin_group) {
            if ($this->group()) {
                $attribute = $this->group->name_ar;
            }
        }
        return $attribute;
    }
}
