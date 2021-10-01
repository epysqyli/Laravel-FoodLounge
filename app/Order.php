<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function foods() {
        return $this->hasManyThrough(Food::class, FoodOrder::class);
    }
}
