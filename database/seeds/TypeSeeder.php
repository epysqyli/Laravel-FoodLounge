<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            'Antipasti',
            'Primi piatti',
            'Secondi piatti',
            'Dessert',
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
