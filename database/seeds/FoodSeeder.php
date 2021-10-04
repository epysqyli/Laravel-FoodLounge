<?php

use Illuminate\Database\Seeder;

use App\Food;
use Faker\Factory;

class FoodSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $food = new Food();

            $food->user_id = rand(1, 10);
            $food->type_id = rand(1, 100);
            $food->name = $faker->words(3, true);
            $food->price = $faker->randomFloat(2, 1, 99);
            $food->description = $faker->paragraph();
            $food->ingredients = $faker->paragraph();
            $food->visible = [true, false][rand(0, 1)];
            $food->image = "https://picsum.photos/300/300";
            $food->additional_details = $faker->paragraph(1, true);

            $food->save();
        }
    }
}
