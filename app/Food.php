<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'ingredients',
        'visible',
        'image',
        'additional_details'
    ];

    protected $table = 'foods';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('food_units');
    }
}
