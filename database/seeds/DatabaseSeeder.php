<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //$this->call(UserSeeder::class);
        //$this->call(CategorySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
