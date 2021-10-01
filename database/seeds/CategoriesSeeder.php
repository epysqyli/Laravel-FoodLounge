<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Cinese',
            'Giapponese',
            'Pizzeria',
            'Fast Food',
            'Indiano',
            'Messicano',
            'Thailandese',
            'Italiano',
            'Greco',
            'Pasticceria'
        ];

        foreach ($categories as $cat_name) {
            $category = new Category();

            $category->name = $cat_name;
            $category->img = "https://picsum.photos/700/500";

            $category->save();
        }
    }
}
