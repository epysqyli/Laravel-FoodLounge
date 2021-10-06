<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'description',
        'vat',
        'slug',
        'profile_image',
        'cover_image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
