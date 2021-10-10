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

        // for ($i = 0; $i < 10; $i++) {  per creazione di 10 user fake
        //     $user = new User();

        //     $user->email = $faker->unique()->email();
        //     $user->password = $faker->unique()->password();
        //     $user->name = $faker->unique()->company();
        //     $user->address = $faker->unique()->address();
        //     $user->description = $faker->paragraphs(3, true);
        //     $user->vat = rand(intval(11111111111),intval(99999999999));
        //     $user->slug = Str::slug($user->name);
        //     $user->profile_image = "https://picsum.photos/300/300";
        //     $user->cover_image = "https://picsum.photos/1200/600";

        //     $user->save();
        // }

        // user 1 _ cinese ok
        $user = new User();
        $user->email = 'info@Hekfanchai.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Hekfanchai';
        $user->address = 'Via Padova 3, Milano - 20127';
        $user->description = 'Hekfanchai ti porta alla scoperta della tipica cucina hongkonghese con tante proposte deliziose!';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.lagazzettadelmezzogiorno.it/resizer/495/300/true/1593243295286.jpg--potenza__assembramento_a_tavola__multati_e_chiuso_ristorante_cinese.jpg?1593243295000";
        $user->cover_image = "https://static.cookist.it/wp-content/uploads/sites/21/2020/02/cucina-cinese-migliori-ristoranti-in-italia.jpg";
        $user->save();

        // user 2 _ cinese  ok
        $user = new User();
        $user->email = 'info@ristorantehoujie.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Ristorante Houjie.it';
        $user->address = 'Via Paolo Lomazzo 14, Milano - 20154';
        $user->description = 'Ineguagliabili ravioli, antipasti e ravioli cinesi';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://10619-2.s.cdn12.com/rests/original/502_504286326.jpg";
        $user->cover_image = "https://10619-2.s.cdn12.com/rests/original/502_501718828.jpg";
        $user->save();

        // user 3 _ cinese ok
        $user = new User();
        $user->email = 'info@BAO•CI.it';
        $user->password = $faker->unique()->password();
        $user->name = 'BAO•CI';
        $user->address = 'Via Morazzone 10, Milan - 20154';
        $user->description = 'Ordina il tuo Bao e Bento preferito a casa tua da BaoCi';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.agrodolce.it/app/uploads/2019/04/bao-house-1.jpg";
        $user->cover_image = "https://www.agrodolce.it/app/uploads/2021/05/fare-i-bao-980x400-1.jpg";
        $user->save();

        // user 4 _ cinese ok
        $user = new User();
        $user->email = 'info@Maoji.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Maoji';
        $user->address = 'Alzaia Naviglio Pavese, 6, Milano';
        $user->description = 'Direttamente dalla Cina, i sapori che ti faranno emozionare';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.vitadasani.it/wp-content/uploads/elementor/thumbs/MiniMaoji-oggz5rvo8wy54ybv6tccth9zuusomjyu5a437m62yo.jpg";
        $user->cover_image = "https://amilanopuoi.com/wp-content/uploads/2018/02/A-Milano-puoi_Maoji-9-1024x683.jpg";
        $user->save();

        // user 5 _ cinese ok
        $user = new User();
        $user->email = 'info@RistoranteWangJiang.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Ristorante Wang Jiang';
        $user->address = 'Via Parmigianino 11, Milano - 20146';
        $user->description = 'Cucina pechinese nel centro di Milano';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://d1ralsognjng37.cloudfront.net/b054a223-3720-47cd-8e47-f54101881086.jpeg";
        $user->cover_image = "https://media-cdn.tripadvisor.com/media/photo-s/10/8d/ba/b8/maoji.jpg";
        $user->save();

        // user 6 _ giapponese ok
        $user = new User();
        $user->email = 'info@ichirosushi.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Ichiro Sushi';
        $user->address = 'Via San Vittore 6, Milano - 20123';
        $user->description = 'Ci sono una varietà di esperienze culinarie e gusti per soddisfare tutti i nostri clienti. ';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://d1ralsognjng37.cloudfront.net/20b19544-b562-43b0-987e-0357304a1200.jpeg";
        $user->cover_image = "https://www.mygeisha.it/wp-content/uploads/2016/02/cibo-giapponese.jpg";
        $user->save();

        // user 7 _ giapponese ok
        $user = new User();
        $user->email = 'info@SushiDaily.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Sushi Daily';
        $user->address = 'Via Lodovico Muratori 48, Milano - 20135';
        $user->description = 'Il tuo sushi fresco ogni giorno';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://cdn.shopify.com/s/files/1/0491/1185/9352/files/Schermata_2021-07-08_alle_09.29.43_503x503.png?v=1625729401";
        $user->cover_image = "https://www.jadoresushi.it/images/jadore-ristorante-giapponese-sushi-cittadella.jpg";
        $user->save();

        // user 8 _ giapponese ok
        $user = new User();
        $user->email = 'info@lightsushi.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Light Sushi';
        $user->address = 'Piazza Spotorno 2, Milano - 20150';
        $user->description = 'Specializzato in Giapponese,AsianFusion,Japanese';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://sistersandfederomafood.files.wordpress.com/2020/11/img-20201114-wa0007.jpg";
        $user->cover_image = "https://lightlegnano.it/wp-content/uploads/2021/08/2.jpg";
        $user->save();

        // user 9 _ giapponese ok
        $user = new User();
        $user->email = 'info@parcosushi.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Parco Sushi';
        $user->address = 'Corso Magenta 14, Milano - 20123';
        $user->description = 'Il menu di Parco Sushi Sashimi a Milano: ordina online con ritiro o consegna a domicilio.';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.taiyosushirestaurant.it/wp-content/uploads/2020/06/img-ristorante-taiyo.jpg";
        $user->cover_image = "https://lightlegnano.it/wp-content/uploads/2017/12/Light-Grill_effetto-modena_1920.jpg";
        $user->save();

        // user 10 _ giapponese ok
        $user = new User();
        $user->email = 'info@portami.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Portami by Haruka';
        $user->address = 'Via della Moscova 52, Milano - 20121';
        $user->description = 'Abbiamo sia gusti tradizionali che innovativi, utilizziamo i materiali freschi e di prima classe.';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzdH3DVJnySuM2EIeQaNlLZHrlRxgUnQ5SiQ&usqp=CAU" ;
        $user->cover_image = "https://flawless.life/wp-content/uploads/2016/07/sushi-coverf.jpg";
        $user->save();

        // user 11 _ pizzeria ok
        $user = new User();
        $user->email = 'info@lievitomotherfucker.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Lievito Mother Fucker';
        $user->address = 'Viale Col Di Lana 8, Milano - 20136';
        $user->description = 'pizze al padellino croccanti fuori e morbide dentro, con condimenti classici (Marghe, Marinara, Mortazza e pistacchi) o di stagione';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7qxtiP5cITeQr0G4NawfzFABsB-cykcFGJw&usqp=CAU";
        $user->cover_image = "https://www.alfaforni.com/wp-content/uploads/2018/08/pizza-come-in-pizzeria.jpg";
        $user->save();

        // user 12 _ pizzeria ok
        $user = new User();
        $user->email = 'info@Berberè.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Berberè';
        $user->address = 'Corso Di Porta Ticinese 1, Milano - 20123';
        $user->description = $faker->paragraphs(3, true);
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://conosciroma.it/wp-content/uploads/2019/08/insideat-pizza-preparazione-800x445.jpg";
        $user->cover_image = "https://www.berberepizza.it/wp-content/uploads/2021/04/AlbertoBlasetti-6152_BASSA.jpg?id=8486";
        $user->save();

        // user 13 _ pizzeria ok
        $user = new User();
        $user->email = 'info@Rossopomodoro.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Rossopomodoro';
        $user->address = 'Via Molino Delle Armi 47, Milano - 20123';
        $user->description = 'Noi di Rossopomodoro portiamo da vent Napoli in tutto il mondo facendo gustare la pizza napoletana artigianale a lunga lievitazione';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.lortofruttifero.it/wp-content/uploads/2015/12/pomodoro-Optima-tondo-liscio-lOrtofruttifero.jpg";
        $user->cover_image = "https://www.accademia-pizzaioli.it/wp-content/uploads/2016/05/pizza-calorie.jpe";
        $user->save();

        // user 14 _ pizzeria ok
        $user = new User();
        $user->email = 'info@unaltrapasta.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Un\'altra Pasta';
        $user->address = 'Via Bergamini 5, Milano - 20122';
        $user->description = 'L\'impasto delle nostre pizze? Di tutta un\'altra pasta!';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.gstatic.com/bfe/apps/website/img/h/87450465-pizza-1440.jpg";
        $user->cover_image = "https://wips.plug.it/cips/initalia.virgilio.it/cms/2019/11/pizza-forno-legna.jpg";
        $user->save();

        // user 15 _ pizzeria ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Pizzeria San Gennaro';
        $user->address = 'Via Savona 73, Milano - 20144';
        $user->description = 'L\'impasto partenopero d\'eccelenza nalla tua città';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://scontent-mxp1-1.xx.fbcdn.net/v/t1.6435-9/61605101_829477510757880_7686392112803217408_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=9267fe&_nc_ohc=D_OYHF5qxysAX8YeT9L&_nc_ht=scontent-mxp1-1.xx&oh=61d6cba777dca4191e85b8020866cdb6&oe=617F9011";
        $user->cover_image = "https://www.costedelsud.it/foto/foto-ristorante-pizzeria-azzurra/600-pizza-azzurra.jpg";
        $user->save();

        // user 16 _ fastfood ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Al Mercato Street';
        $user->address = 'Via Sant\'Eufemia 16, Milano - 20122';
        $user->description = 'La carne, protagonista del menù, declinata in due versioni: “Steaks & Burgers”, disponibili in diverse varianti e personalizzabili';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://st.ilfattoquotidiano.it/wp-content/uploads/2014/08/20140819-mc-donald-food-junk-fast-salute.jpg";
        $user->cover_image = "https://ilfattoalimentare.it/wp-content/uploads/2016/09/junk-food-fast-food-Fotolia_92591831_Subscription_Monthly_M.jpg";
        $user->save();

        // user 17 _ fastfood ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Cfk';
        $user->address = 'Via Orefici & Via Cesare Cantù 50, Milan - 20123';
        $user->description = 'La più famosa catena di ristorazione statunitense specializzata in pollo fritto.';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.agrodolce.it/app/uploads/2021/04/2021-r-hamburger-di-scottona-2.jpg";
        $user->cover_image = "https://static.gamberorosso.it/fast-food-768x512.jpg";
        $user->save();

        // user 18 _ fastfood ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'FastFood in duomo';
        $user->address = 'Passaggio Duomo 2, Milano - 20159';
        $user->description = 'Gustosi panini e patatine, insalate, sfiziosità e colazioni';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://picsum.photos/300/300";
        $user->cover_image = "https://static.ohga.it/wp-content/uploads/sites/24/2019/03/cibo-nei-fast-food-qualit%C3%A0-peggiorata.jpg";
        $user->save();


        // user 19 _ fastfood ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Chick Me Out';
        $user->address = 'Via Orti 16, Milan - 20122';
        $user->description = $faker->paragraphs(3, true);
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.carnedipregio.com/wp-content/uploads/2021/06/hamburger-1.jpg";
        $user->cover_image = "https://www.davidezambelli.com/wp-content/uploads/2020/12/image-1-1300x731.jpg";
        $user->save();

        // user 20 _ indiano ok
        $user = new User();
        $user->email = 'info@indianfusionfood.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Indian Fusion Food';
        $user->address = 'Bastioni Di Porta Volta 13, Milano - 20121';
        $user->description = 'Voglia di Indiano ma quella di cucinare è scappata di casa? Non temere! Visita il menù di Indian Fusion Food a Milano e ordina comodamente a domicilio';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://miro.medium.com/max/866/1*P9zQx_NplRbXp4yRyyDsaA.jpeg";
        $user->cover_image = "https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,h_494,w_1150/it/cuisines/indiano-9.jpg";
        $user->save();

        // user 21 _ indiano ok
        $user = new User();
        $user->email = 'info@taraindiano.it';
        $user->password = $faker->unique()->password();;
        $user->name = 'Tara - Specialità Indiane';
        $user->address = 'Via Domenico Cirillo 16, Milano - 20154';
        $user->description = 'Fra le specialità i piatti di curry, preparati con il tipico e inconfondibile mix di spezie che rende famosa la cucina indiana in tutto il mondo';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.tasteofhome.com/wp-content/uploads/2021/01/tasty-butter-chicken-curry-dish-from-indian-cuisine-1277362334.jpg?fit=700,700";
        $user->cover_image = "https://i.ytimg.com/vi/PQuSGxkrLAg/maxresdefault.jpg";
        $user->save();

        // user 22 _ indiano ok
        $user = new User();
        $user->email = 'info@alnoor.it';
        $user->password = $faker->unique()->password();
        $user->name = 'Al Noor';
        $user->address = 'Via Giuseppe Ripamonti 15, Milano - 20135';
        $user->description = 'Concedetevi le nostre prelibatezze anche a casa o in ufficio';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://scontent.fcia2-1.fna.fbcdn.net/v/t31.18172-8/12140135_565008820314591_2044360471285058657_o.jpg?_nc_cat=100&ccb=1-5&_nc_sid=174925&_nc_ohc=kFNIDUljQBMAX8w0RyD&_nc_ht=scontent.fcia2-1.fna&oh=cc7e03f96ecffd391e322f9609dcf9df&oe=617EA568";
        $user->cover_image = "https://picsum.photos/1200/600";
        $user->save();

        // user 23 _ indiano ok
        $user = new User(); 
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Indian Takeaway Agra';
        $user->address = 'Via Antonio Pollaiuolo 2, Milan - 20159';
        $user->description = 'Le nostre pietanze direttamente dove vuoi tu';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://cdn.tasteatlas.com/images/toplistarticles/d0e6a0a79d5f4197a51f4ca065393ffe.jpg?w=375&h=280";
        $user->cover_image = "https://scontent.fcia2-1.fna.fbcdn.net/v/t31.18172-8/12140135_565008820314591_2044360471285058657_o.jpg?_nc_cat=100&ccb=1-5&_nc_sid=174925&_nc_ohc=kFNIDUljQBMAX8w0RyD&_nc_ht=scontent.fcia2-1.fna&oh=cc7e03f96ecffd391e322f9609dcf9df&oe=617EA568";
        $user->save();

        // user 24 _ indiano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Indian Restaurant';
        $user->address = 'Via Antonio Testuggine 2, Milan - 20159';
        $user->description = 'A Milano, il ristorante indiano per eccellenza';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://ychef.files.bbci.co.uk/976x549/p07cj8zj.jpg";
        $user->cover_image = "https://images.vanityfair.it/wp-content/uploads/2019/03/24183015/Cucina-indiana-L.jpg";
        $user->save();
        
        // user 25 _ messicano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Ahorita - Mexican Bowl';
        $user->address = 'Via Orti 16, Milano -  20122';
        $user->description = 'La nostra cucina messicana contemporanea servita in comodissime bowl';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.isabeleats.com/wp-content/uploads/2019/03/chicken-burrito-bowl-small-2-650x973.jpg";
        $user->cover_image = "https://img.taste.com.au/AjAZwpN3/w643-h428-cfill-q90/taste/2018/01/mexican-chicken-rice-bowl-134872-1.jpg";
        $user->save();
        
        // user 26 _ messicano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Mexicali';
        $user->address = 'Viale Ortles 62, Milano - 20139';
        $user->description = $faker->paragraphs(3, true);
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.eatthis.com/wp-content/uploads/sites/4/2020/06/chimichanga.jpg";
        $user->cover_image = "https://cdn.cheapism.com/images/Budget_Friendly_Mexican_Dishes.2e16d0ba.fill-1440x605.jpg";
        $user->save();
        
        // user 27 _ messicano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'El Castillo';
        $user->address = 'Via Giovanni Battista Tiepolo 1, Milan - 20129';
        $user->description = 'Stai cercando cucina Messicana e Tacos o Burritos a domicilio? Con El Castillo di Milano non hai più bisogno di cercare';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-burrito-egg-rolls-pin-1549490514.jpg";
        $user->cover_image = "https://www.romeing.it/wp-content/uploads/2020/12/casa-sanchez-mexican-restaurant-rome.jpg";
        $user->save();
        
        // user 28 _ messicano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Ciapa el Taco';
        $user->address = 'Via Francesco Brioschi 16, Milano - 20136';
        $user->description = 'Fame? Ciapati sto taco!';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://cdn.vox-cdn.com/thumbor/hB18H7j3uAz2_-zk_oBr-YuT1Y8=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16182432/mannys_016.jpg";
        $user->cover_image = "https://scontent-mxp1-1.xx.fbcdn.net/v/t1.6435-9/155770136_168912761705451_1032184997754463508_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=e3f864&_nc_ohc=pFrUaLVZDzwAX89J-GG&_nc_ht=scontent-mxp1-1.xx&oh=6f6129941259ac3bfff8710d460aa0b3&oe=618032B2";
        $user->save();
        
        // user 29 _ thailandese ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Wok On The Go';
        $user->address = 'Via Urbano 2, Milano - 20123';
        $user->description = 'Wok on the go un format asiatico, dove potrai comporre i tuoi box a tuo gusto';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://static.cookist.it/wp-content/uploads/sites/21/2019/12/come-usare-il-wok-1200x1200.jpg";
        $user->cover_image = "https://upload.wikimedia.org/wikipedia/commons/b/ba/Wok_cooking.jpg";
        $user->save();
        
        // user 30 _ thailandese ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Odoroki';
        $user->address = 'Stazione Milano Centrale, Milano - 20125';
        $user->description = 'Le nostre ricette sono state realizzate in collaborazione con la Dott.ssa Cleonice Renzetti';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://qul.imgix.net/019db310-7730-4195-834c-ff3a65e29116/449804_sld.jpg";
        $user->cover_image = "https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1200,h_630,d_it:cuisines:thailandese-0.jpg/v1/it/restaurants/235800.jpg";
        $user->save();
        
        // user 31 _ thailandese ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Wagamama';
        $user->address = 'Via S. Pietro All\'Orto 11, Milano - 20121';
        $user->description = 'Seguendo la filosofia kaizen, i nostri ingredienti sono cucinati e serviti freschi';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.datocms-assets.com/48065/1626174981-homepagepromo1.webp?fm=png";
        $user->cover_image = "https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_650/v1621044973/Southeast-Asian-Food-Pad-Thai/Southeast-Asian-Food-Pad-Thai.jpg";
        $user->save();

        // user 32 _ thailandese ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Wokin';
        $user->address = 'Via Lazzaretto 8, Milano - 20124';
        $user->description = 'Cibo gustoso e nutriente che viene cucinato davanti a te e servito in pochi minuti';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfyBfA8tM8-0Lys4gS7YDMxbWr5ncKgf9CFg&usqp=CAU";
        $user->cover_image = "https://images.squarespace-cdn.com/content/v1/604a58bb62cc3c0652ead257/1622805827202-1NNOI9127TEH90IBUC8R/Thai+Food+Torino+033.png";
        $user->save();

        // user 33 _ italiano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'La Pasta di Nonna Rosa';
        $user->address = 'Viale Bligny 30, Milano - 20136';
        $user->description = 'La pasta fresca abbinata ai tipici piatti italiani';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://static.cookist.it/wp-content/uploads/sites/21/2019/01/pasta-e-fagioli-napoletana-1200x675.jpg";
        $user->cover_image = "https://wips.plug.it/cips/buonissimo.org/cms/2019/04/pasta-bersagliera.jpg";
        $user->save();

        // user 34 _ italiano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Miscusi';
        $user->address = 'Via G. Leopardi 13, Milano - 20123';
        $user->description = 'Un menù tutto mediterraneo da farvi assaggiare';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.italiachiamaitalia.it/wp-content/uploads/2016/08/6615-mozz-pro.jpg";
        $user->cover_image = "https://italian-riviera.com/wp-content/uploads/2019/12/lasagne-alla-bolognese.1000x1000-800x800.jpg";
        $user->save();

        // user 35 _ italiano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Rosticceria Milanese';
        $user->address = 'Via Tito Livio 29, Milano - 20137';
        $user->description = 'Il nostro menu soddisferà il vostro palato ogni settimana';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.mangiaebevi.it/wp-content/uploads/2020/10/unnamed-2-copia.png";
        $user->cover_image = "https://hips.hearstapps.com/cit.h-cdn.co/assets/17/14/1600x1200/sd-aspect-1491224453-street-food-cibi-da-strada-tipici.jpg?resize=480:*";
        $user->save();

        // user 36 _ italiano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'La Pasta di Quore';
        $user->address = 'Via Delio Tessa 2, Milano - 2012';
        $user->description = 'Quore Italiano, il sogno di portare il cibo italiano di qualità nel mondo';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://d1ralsognjng37.cloudfront.net/77687e7e-c13d-4720-9073-aecec83a75dc.jpeg";
        $user->cover_image = "https://www.agrodolce.it/app/uploads/2018/10/cibo-italiano-980x400.jpg";
        $user->save();

        // user 37 _ italiano ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Officina del Riso';
        $user->address = 'Via Marghera 29, Milano - 20149';
        $user->description = 'Ristorante di Milano che porta in tavola la passione per il risotto';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://d1ralsognjng37.cloudfront.net/2c1003a8-8dce-4300-a043-c97cf036af17.jpeg";
        $user->cover_image = "https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2020/10/1601637225_2248137c7f328d02820c6c395be2c2bf89157db0-1601629369.jpg?w=580";
        $user->save();


        // user 38 _ greco ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Wannas Greek Cuisine';
        $user->address = 'Via Pietro Maroncelli 19, Milano - 20154';
        $user->description = 'La tipica cucina Greca a Milano';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://images.lacucinaitaliana.it/wp-content/uploads/2015/07/07174731/cucina-greca-800x1000.jpg";
        $user->cover_image = "https://images.lacucinaitaliana.it/wp-content/uploads/2019/09/12211340/cucina-greca-milano-vasiliki-kouzina-1600x800.jpg";
        $user->save();

        // user 39 _ greco ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Greek Fusion';
        $user->address = 'Ripa di Porta Ticinese 15, Milano - 20658';
        $user->description = 'Greek Fusion fin dal 1994 i primi ad aver arrotolato la prima Pita Gyros in Italia';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.sfizioso.it/wp-content/uploads/2020/07/Souvlaki_0009-1024x683.jpg";
        $user->cover_image = "https://rs-menus-api.roocdn.com/images/40df53a8-a0f4-4f44-8283-3409044a95e9/image.jpeg?width=1200&height=630&auto=webp&format=jpg&fit=crop&v=";
        $user->save();


        // user 40 _ pasticceria ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Iginio Massari';
        $user->address = 'Via Guglielmo Marconi 4, Milano - 20123';
        $user->description = 'I dolci del maestro Igninio Massari';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://www.scattidigusto.it/wp-content/uploads/2014/05/dolce.jpg";
        $user->cover_image = "https://www.blogsicilia.it/wp-content/uploads/2020/08/SH_tiramisu_iginio_massari.jpg";
        $user->save();

        // user 41 _ pasticceria ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Vanilla Bakery';
        $user->address = 'Via San Siro 2, Milano - 20149';
        $user->description = 'Da Vanilla Bakery potrai gustare tantissime ricette diverse';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://lh3.googleusercontent.com/proxy/BTuqmMU6rz0rT5cyHJm8RfS6eQEQ87WTfItu5qsthj2-1mKUaVyz375XHc-DU6HzD9EqDD--H2Tz4hXAzzm2-GQOAgFIDJiqCHdT_IamoEaGKXxo5DTaJXLdrw1IObHynUNnJH6ZuA";
        $user->cover_image = "https://www.oubruncher.com/photos1/3037_3.jpg";
        $user->save();

        // user 42 _ pasticceria ok
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'La Cannoleria Gourmet';
        $user->address = 'Via Vetere 7, Milano - 20123';
        $user->description = 'nasce con il desiderio di rivoluzionare il concetto di pasticceria';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://lh3.googleusercontent.com/proxy/qH9f-uOz9zpQMMS0BmtIOmQDy0o5m7jVspliBCPNblHV5gFYIs_JwbnUewd65VBpcdSBa2TDVYulvCVHqvi1ahWGS1gkvtPFginoyk4aknz7yE3Qm2lu5S1kNHmm3Arsdl4DXpdUDraCSeurHoyYgjwjcpc";
        $user->cover_image = "https://www.lacannoleriagourmet.it/resources/images/homepage/slider/cannoli.jpg0";
        $user->save();

        // user 43 _ pasticceria ok 
        $user = new User();
        $user->email = $faker->unique()->email();
        $user->password = $faker->unique()->password();
        $user->name = 'Panarello';
        $user->address = 'Piazza San Nazaro in Brolo 15, Milano - 20122';
        $user->description = 'I profumi e i sapori rivelano il connubio tra materie prime pregiate e il rispetto per una lenta e attenta lavorazione';
        $user->vat = rand(intval(11111111111),intval(99999999999));
        $user->slug = Str::slug($user->name);
        $user->profile_image = "https://static.cookist.it/wp-content/uploads/sites/21/2019/12/Tiramis%C3%B9-in-bicchiere-0D6A6823-1200x1200.jpg";
        $user->cover_image = "https://cdn.pixabay.com/photo/2016/10/31/18/14/dessert-1786311__480.jpg";
        $user->save();


    }
}
