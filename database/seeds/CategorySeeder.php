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
            'Cinese'=>"https://www.seekpng.com/png/detail/154-1542804_chinese-range-chinese-food-png-hd.png
            ",
            'Giapponese'=>"https://www.freepngimg.com/png/17934-sushi-png-image",
            'Pizzeria'=>"https://www.pizzafestivallombardia.it/wp-content/uploads/2018/07/pizza-festival-lombardia-slide-pizza-1.png",
            'Fast Food'=>"https://www.freepngimg.com/png/490-hamburger-burger-png-image",
            'Indiano'=>"https://toppng.com/indian-food-images-PNG-free-PNG-Images_76625",
            'Messicano'=>"https://toppng.com/burrito-PNG-free-PNG-Images_6137",
            'Thailandese'=>"https://toppng.com/free-image/viet-thai-market-street-cafe-is-york-pennsylvanias-food-png-top-view-PNG-free-PNG-Images_177196",
            'Italiano'=>"https://toppng.com/free-image/pasta-photo-PNG-free-PNG-Images_36479",
            'Greco'=>"“https://toppng.com/free-image/food-png-salad-as-a-healthy-food-ketogenic-vegan-50-healthy-delicious-recipes-PNG-free-PNG-Images_225299",
            'Pasticceria'=>"https://toppng.com/free-image/cake-PNG-free-PNG-Images_12197",
        ];

        foreach ($categories as $cat_name=>$image) {
            $category = new Category();

            $category->name = $cat_name;
            $category->img = Storage::put("uploads", $image);

            $category->save();
        }
    }
}
