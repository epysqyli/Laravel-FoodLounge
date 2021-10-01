<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function orders() {
        return $this->hasManyThrough(Order::class, FoodOrder::class);
    }
}
