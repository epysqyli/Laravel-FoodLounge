<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
            'Pasticceria',
        ];


        foreach ($categories as  $cat_name) {
            $category = new Category();
            $category->name = $cat_name;
            $category->img = 'https://picsum.photos/200/300';
            $category->save();
        };
        
    }
}
