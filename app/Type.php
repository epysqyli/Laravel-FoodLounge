<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function foods() {
        return $this->hasMany(Food::class);
    }
}
