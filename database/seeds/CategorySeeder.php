<?php

use Illuminate\Database\Seeder;

use App\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
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
            'Pasticceria',
        ];


        foreach ($categories as  $cat_name) {
            $category = new Category();
            $category->name = $cat_name;
            $slug = Str::slug($cat_name);
            $category->slug = makeUniqueSlug($slug);
            $category->img = 'https://picsum.photos/200/300';
            $category->save();
        };
        
    }
}
