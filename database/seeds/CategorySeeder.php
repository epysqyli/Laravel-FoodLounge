<?php

use Illuminate\Database\Seeder;

use App\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Cinese' => 'https://3.imimg.com/data3/MG/CN/MY-9635372/chinese-food-500x500.jpeg',
            'Giapponese' => 'https://www.sushiko.it/wp-content/uploads/2020/09/img_standard_10.jpg',
            'Pizzeria' => 'https://www.ilcuoreinpentola.it/wp-content/uploads/2020/03/pizza-senza-lievito-di-birra2-500x500.jpg',
            'Fast Food' => 'https://kadence.com/wp-content/uploads/2018/11/timothy-barlin-v_4RGBh3wus-unsplash-scaled-500x500.jpg ',
            'Indiano' => 'https://cookingmadehealthy.com/wp-content/uploads/2019/01/Indian-Curry-Chicken-2-500x500.jpg',
            'Messicano' => 'https://www.melarossa.it/wp-content/uploads/2020/12/tacos-ricetta.jpg',
            'Thailandese' => 'https://thai369.com/wp-content/uploads/2015/04/Pad-Thai-500x500.jpg',
            'Italiano' => 'http://www.bartrade.me/img/123/spaghetti-500x500-rez.jpg',
            'Greco' => 'https://www.melarossa.it/wp-content/uploads/2019/06/insalata-greca-ricetta.jpg',
            'Pasticceria' => 'https://www.napolimilionaria.it/wp-content/uploads/2020/01/ricetta-pavlova-torta-classica-500x500.jpg',
        ];


        foreach ($categories as  $cat_name => $value) {
            $category = new Category();
            $category->name = $cat_name;
            $slug = Str::slug($cat_name);
            $category->slug = makeUniqueSlug($slug);
            $category->img = $value;
            $category->save();
        };
    }
}
