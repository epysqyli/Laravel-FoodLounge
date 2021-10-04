<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $user = new User();

            $user->email = $faker->unique()->email();
            $user->password = $faker->unique()->password();
            $user->name = $faker->unique()->company();
            $user->address = $faker->unique()->address();
            $user->description = $faker->paragraphs(3, true);
            $user->vat = rand(intval(11111111111),intval(99999999999));
            $user->slug = Str::slug($user->name);
            $user->profile_image = "https://picsum.photos/300/300";
            $user->cover_image = "https://picsum.photos/1200/600";

            $user->save();
        }
    }
}
