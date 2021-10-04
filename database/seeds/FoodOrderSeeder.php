<?php

use Illuminate\Database\Seeder;
use App\FoodOrder;

class FoodOrderSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            $newFoodOrder = new FoodOrder();
            
            $newFoodOrder->food_id = $i;
            $newFoodOrder->order_id = $i;
            $newFoodOrder->food_units = rand(1, 10);

            $newFoodOrder->save();
        }
    }
}
