<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\User;

class AddCategoriesToUsers extends Seeder
{

    public function run()
    {
        $categories = Category::all();
        $users = User::all();   

        foreach ($categories as $key => $category) {
            $category->users()->attach($users[$key]);
        }
    }
}
