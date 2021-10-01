<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Factory;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $order = new Order();
            $order->user_id = rand(1,10);
            $order->amount = $faker->randomFloat(2, 1, 999);
            $order->customer_name = $faker->firstname();
            $order->customer_surname = $faker->unique()->lastname();
            $order->customer_address = $faker->address();
            $order->customer_email = $faker->email();
            $order->phone_number = $faker->phonenumber();
            $order->transaction_id = $faker->iban();
            $order->transaction_status = ["Rejected", "Accepted"][rand(0,1)];
            
            $order->save();
        }
    }
}
