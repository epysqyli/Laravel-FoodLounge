<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            'Primi piatti',
            'Secondi piatti',
            'Dessert & Bevande',
        ];

        foreach ($types as $type) {
            $newType = new Type();

            // can be assigned to other users as well
            $newType->user_id = 1;
            $newType->name = $type;

            $newType->save();
        }
    }
}
