<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function foods() {
        return $this->hasMany(Food::class);
    }
}
