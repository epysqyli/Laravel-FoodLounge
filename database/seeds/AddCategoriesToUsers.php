<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\User;

class AddCategoriesToUsers extends Seeder
{

    public function run()
    {
        // $categories = Category::all();
        // $users = User::all();   

        // foreach ($categories as $key => $category) {
        //     $category->users()->attach($users[$key]);
        // }

        // cinese
        $category = Category::find(1);
        $user = User::find(1);
        $category->users()->attach($user->id);

        $category = Category::find(1);
        $user = User::find(2);
        $category->users()->attach($user->id);

        $category = Category::find(1);
        $user = User::find(3);
        $category->users()->attach($user->id);

        $category = Category::find(1);
        $user = User::find(4);
        $category->users()->attach($user->id);

        $category = Category::find(1);
        $user = User::find(5);
        $category->users()->attach($user->id);

        
        // Giappo
        $category = Category::find(2);
        $user = User::find(6);
        $category->users()->attach($user->id);

        $category = Category::find(2);
        $user = User::find(7);
        $category->users()->attach($user->id);

        $category = Category::find(2);
        $user = User::find(8);
        $category->users()->attach($user->id);

        $category = Category::find(2);
        $user = User::find(9);
        $category->users()->attach($user->id);

        $category = Category::find(2);
        $user = User::find(10);
        $category->users()->attach($user->id);


        // Pizzeria
        $category = Category::find(3);
        $user = User::find(11);
        $category->users()->attach($user->id);

        $category = Category::find(3);
        $user = User::find(12);
        $category->users()->attach($user->id);

        $category = Category::find(3);
        $user = User::find(13);
        $category->users()->attach($user->id);

        $category = Category::find(3);
        $user = User::find(14);
        $category->users()->attach($user->id);

        $category = Category::find(3);
        $user = User::find(15);
        $category->users()->attach($user->id);


        // Fast food
        $category = Category::find(4);
        $user = User::find(16);
        $category->users()->attach($user->id);

        $category = Category::find(4);
        $user = User::find(17);
        $category->users()->attach($user->id);

        $category = Category::find(4);
        $user = User::find(18);
        $category->users()->attach($user->id);

        $category = Category::find(4);
        $user = User::find(19);
        $category->users()->attach($user->id);


        // Indiano
        $category = Category::find(5);
        $user = User::find(20);
        $category->users()->attach($user->id);
        
        $category = Category::find(5);
        $user = User::find(21);
        $category->users()->attach($user->id);

        $category = Category::find(5);
        $user = User::find(22);
        $category->users()->attach($user->id);

        $category = Category::find(5);
        $user = User::find(23);
        $category->users()->attach($user->id);

        $category = Category::find(5);
        $user = User::find(24);
        $category->users()->attach($user->id);   


        // Messicano
        $category = Category::find(6);
        $user = User::find(25);
        $category->users()->attach($user->id);
        
        $category = Category::find(6);
        $user = User::find(26);
        $category->users()->attach($user->id);

        $category = Category::find(6);
        $user = User::find(27);
        $category->users()->attach($user->id);

        $category = Category::find(6);
        $user = User::find(28);
        $category->users()->attach($user->id);      


        // thai
        $category = Category::find(7);
        $user = User::find(29);
        $category->users()->attach($user->id);

        $category = Category::find(7);
        $user = User::find(30);
        $category->users()->attach($user->id);

        $category = Category::find(7);
        $user = User::find(31);
        $category->users()->attach($user->id);

         $category = Category::find(7);
        $user = User::find(32);
        $category->users()->attach($user->id);


        // italianio
        $category = Category::find(8);
        $user = User::find(33);
        $category->users()->attach($user->id);

        $category = Category::find(8);
        $user = User::find(34);
        $category->users()->attach($user->id);

        $category = Category::find(8);
        $user = User::find(35);
        $category->users()->attach($user->id);

        $category = Category::find(8);
        $user = User::find(36);
        $category->users()->attach($user->id);

        $category = Category::find(8);
        $user = User::find(37);
        $category->users()->attach($user->id);


        // greco
        $category = Category::find(9);
        $user = User::find(38);
        $category->users()->attach($user->id);

        $category = Category::find(9);
        $user = User::find(39);
        $category->users()->attach($user->id);

        
        // pasticceria
        $category = Category::find(10);
        $user = User::find(40);
        $category->users()->attach($user->id);

        $category = Category::find(10);
        $user = User::find(41);
        $category->users()->attach($user->id);

        $category = Category::find(10);
        $user = User::find(42);
        $category->users()->attach($user->id);

        $category = Category::find(10);
        $user = User::find(43);
        $category->users()->attach($user->id);
        
    }
}
