<?php

use Illuminate\Database\Seeder;
use App\FoodOrder;

class FoodOrderSeeder extends Seeder
{

    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $newFoodOrder = new FoodOrder();
            
            $newFoodOrder->food_id = rand(1, 10);
            $newFoodOrder->order_id = rand(1, 10);
            $newFoodOrder->food_units = rand(1, 10);

            $newFoodOrder->save();
        }
    }
}
