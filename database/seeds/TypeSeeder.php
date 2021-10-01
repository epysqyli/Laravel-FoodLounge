<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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

            $newType->name = $type;

            $newType->save();
        }
    }
}
