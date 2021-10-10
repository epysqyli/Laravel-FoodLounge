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
            'Pizzeria' => 'https://static.sscontent.com/prodimg/thumb/500/500/products/124/
            v852401_prozis_4-x-ultra-thin-pizza-crusts_5.jpg',
            'Fast Food' => 'https://kadence.com/wp-content/uploads/2018/11/timothy-barlin-v_4RGBh3wus-unsplash-scaled-500x500.jpg ',
            'Indiano' => 'https://beautyfoodblog.com/wp-content/uploads/2020/06/Indian-red-lentil-Dal-
            Masoor-Dal-Tadka-with-basmati-rice-ricetta-Dahl-di-lenticchie-rosse-e-riso-basmati-
            vegan-gluten-free-500x500.jpg',
            'Messicano' => 'https://bakeitwithlove.com/wp-content/uploads/2021/05/Walking-Taco-Casserole-
            sq-500x500.jpg',
            'Thailandese' => 'https://thai369.com/wp-content/uploads/2015/04/Pad-Thai-500x500.jpg',
            'Italiano' => 'http://www.bartrade.me/img/123/spaghetti-500x500-rez.jpg',
            'Greco' => 'https://tempodicottura.it/wp-content/uploads/2021/05/nsalata-di-pollo-con-crema-al-
            parmigiano-500x500.jpg',
            'Pasticceria' => 'https://www.cuochemabuone.it/wp-content/uploads/2020/05/red-velvet-
            cake-500x500.jpg',
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
