<?php

use Illuminate\Database\Seeder;

use App\Food;
use Faker\Factory;


class FoodSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        // for ($i = 0; $i < 10; $i++) {
        //     $food = new Food();

        //     $food->user_id = rand(1, 10);
        //     $food->type_id = rand(1, 4);
        //     $food->name = $faker->words(3, true);
        //     $food->price = $faker->randomFloat(2, 1, 99);
        //     $food->description = $faker->paragraph();
        //     $food->ingredients = $faker->paragraph();
        //     $food->visible = [true, false][rand(0, 1)];
        //     $food->image = "https://picsum.photos/300/300";
        //     $food->additional_details = $faker->paragraph(1, true);

        //     $food->save();
        // }

        // messicano_userid25 ok
        $food = new Food();
        $food->user_id = 25;
        $food->type_id = 1;
        $food->name = 'Miss Veggie';
        $food->price = '10.0';
        $food->description = 'Riso, Feta, Olive, Avocado, Fagioli Rossi, Mais, Pico De Gallo, Cavolo Cappuccio, Peperoni e Guacamole';
        $food->ingredients = 'Riso, Feta, Olive, Avocado, Fagioli Rossi, Mais, Pico De Gallo, Cavolo Cappuccio, Peperoni e Guacamole';
        $food->visible = 1;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC81Y2VhZDhlMi1jNTlkLTRiYjYtODFjNS1lYTUwYzc0ODk0ODMuanBlZw==0";
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 25;
        $food->type_id = 1;
        $food->name = 'Mr Pulled Pork';
        $food->price = '9.0';
        $food->description = 'Riso, Pulled Pork, Fagioli Rossi, Mais, Pico de Gallo, Guacamole, Peperone Verde, Cipolla sott\'aceto, Sour Cream, Salsa BBQ';
        $food->ingredients = 'Riso, Pulled Pork, Fagioli Rossi, Mais, Pico de Gallo, Guacamole, Peperone Verde, Cipolla sott\'aceto, Sour Cream, Salsa BBQ';
        $food->visible = 1;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80M2M3YjhhYS1jOTRjLTQxNDgtYjkyYS0xOTUyMzU1M2UxNTkuanBlZw==";
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 25;
        $food->type_id = 1;
        $food->name = 'King Chili';
        $food->price = '8.0';
        $food->description = "Riso, Chili con Carne Piccante, Fagioli Rossi, Pico de Gallo, Peperoni, Guacamole, Cheddar, Cipolla sott'aceto, Sour Cream, Salsa Messicana";
        $food->ingredients = "Riso, Chili con Carne Piccante, Fagioli Rossi, Pico de Gallo, Peperoni, Guacamole, Cheddar, Cipolla sott'aceto, Sour Cream, Salsa Messicana";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9lYTVhMjhlNy1mNmIwLTQ4YmYtYTFmOS1kOGQ1OTUxOGZlN2EuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // messicano_userid26 ok
        $food = new Food();
        $food->user_id = 26;
        $food->type_id = 1;
        $food->name = 'Burrito Campesino';
        $food->price = '8.0';
        $food->description = "Tortilla di grano farcita con pulled pork, salsa Bbq, riso mex (piccante), coleslaw, insalata e chips";
        $food->ingredients = "Tortilla di grano farcita con pulled pork, salsa Bbq, riso mex (piccante), coleslaw, insalata e chips";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9hY2MzOWI5Zi01ZjEyLTQ1OTQtODBkNi00NWIwNDg5NzNmMmYuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 26;
        $food->type_id = 1;
        $food->name = 'Fajitas Combo';
        $food->price = '7.0';
        $food->description = "Manzo e pollo marinati, grigliati e tagliati a striscioline serviti su piastra rovente con cipolle e peperoni dolci con contorno di guacamole, pico de gallo, purea di fagioli neri e formaggio - Tutte le fajtas sono accompagnate da 3 tortillas di grano che possono essere sostituite da 3 di mais per gli allergici al glutine";
        $food->ingredients = "Manzo e pollo marinati";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9hYThjMDljYi04ZjNkLTQxNDItODU4OS02OTFkYjZlMmNiOWEuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 26;
        $food->type_id = 1;
        $food->name = 'Tacos de Carnitas';
        $food->price = '8.0';
        $food->description = "Tre tortillas di grano farcite con manzo, pico de gallo, guacamole, salsa thousand islande, insalata e chips";
        $food->ingredients = "tortillas di grano, manzo, pico de gallo, guacamole, salsa thousand islande, insalata e chips";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9lMGJlMjg0MS00NzI4LTRkN2EtOWE3Yy1jN2E1YTgyZTA1MWIuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // messicano_userid27 ok
        $food = new Food();
        $food->user_id = 27;
        $food->type_id = 1;
        $food->name = 'Nachos Guacamole';
        $food->price = '8.0';
        $food->description = "Chips di farina di mais al forno ricoperte con cipolla caramellata, crema di guacamole, coriandolo, spicy maio e jalapeños a rondelle";
        $food->ingredients = "Chips di farina di mais, cipolla caramellata, crema di guacamole, coriandolo, spicy maio e jalapeños a rondelle";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80MDhkNzY1Yi03MmQwLTQ0MGYtOWQ1NC02MjZhYjQ3MmUzYTUuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 27;
        $food->type_id = 1;
        $food->name = 'Beef and Beans';
        $food->price = '12.0';
        $food->description = "Tortiglia di grano farcita con riso messicano, crema di fagioli, pulled beef, lattuga, cipolla caramellata, cipollotto, peperoni e panna acida";
        $food->ingredients = "Tortiglia di grano, riso messicano, crema di fagioli, pulled beef, lattuga, cipolla caramellata, cipollotto, peperoni e panna acida";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84ODUxMjE0OC1hMjY5LTQ4ZGUtOTI4ZC01Yzc1YTRhYWU2NzguanBlZw==' ;
        $food->additional_details = '...';
        $food->save();
       
        $food = new Food();
        $food->user_id = 27;
        $food->type_id = 1;
        $food->name = 'Pulled Pork Nachos';
        $food->price = '9.0';
        $food->description = "Chips di farina di mais al forno ricoperte di crema di fagioli, spalla di maiale sfilacciata, white & red cheese, salsa tradizionale di pico de gallo, cream di guacamole, e aggiunta di panna acida e jalapeños a rondelle";
        $food->ingredients = "farina di mais, crema di fagioli, spalla di maiale sfilacciata, white & red cheese, salsa tradizionale di pico de gallo, cream di guacamole, e aggiunta di panna acida e jalapeños a rondelle";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9mYzZlOGY1Ni0zZTYxLTRlZWMtYTE1My1jYWI1NGM1MWNkNjQuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // messicano_userid28 ok
        $food = new Food();
        $food->user_id = 28;
        $food->type_id = 1;
        $food->name = 'Chicken taco';
        $food->price = '8.0';
        $food->description = "Tortilla artigianale di frumento al carbone vegetale, pollo paprika e lime, insalata, coleslaw, pico de gallo, salsa al lime homemade, semi croccanti";
        $food->ingredients = "frumento al carbone vegetale, pollo paprika e lime, insalata, coleslaw, pico de gallo, salsa al lime homemade, semi croccanti";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8xNjhkODliNy0wZDgwLTRmN2MtYWQxNS1mZGE1ZjMyN2Y0N2MuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 28;
        $food->type_id = 1;
        $food->name = 'Mexican chorizo taco';
        $food->price = '7.0';
        $food->description = "Tortilla artigianale di frumento al chile de árbol, chorizo messicano homemade cotto a bassa temperatura, fagioli neri rifritti, pico de gallo, guacamole della casa, sour cream homemade, briciole di nachos";
        $food->ingredients = "frumento al chile de árbol, chorizo messicano homemade, fagioli neri rifritti, pico de gallo, guacamole della casa, sour cream homemade, briciole di nachos";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8wYjI0OGMxNy00Mzg0LTQyMzktYmQwOS05OGYxNGM0NTliOGIuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 28;
        $food->type_id = 1;
        $food->name = 'Pulled Burrito';
        $food->price = '12.0';
        $food->description = "Tortilla artigianale di frumento, riso messicano (con piselli), pulled pork, fagioli neri rifritti, coleslaw, cheddar, salsa bbq homemade, salsa messicana homemade";
        $food->ingredients = "Frumento, riso messicano, con piselli, pulled pork, fagioli neri rifritti, coleslaw, cheddar, salsa bbq homemade, salsa messicana homemade";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kMmU3OTQ2ZS1iMTc4LTQxYmMtYjJmMi00N2UwMTI4NjE2NGMuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        // thai_userid29 ok
        $food = new Food();
        $food->user_id = 29;
        $food->type_id = 1;
        $food->name = 'Bao Supreme Pork';
        $food->price = '5.0';
        $food->description = "Due panini bao con pancetta di maiale cotta al forno, cipolle caramellate alla soia, salsa ";
        $food->ingredients = "Panini bao, pancetta di maiale cotta al forno, cipolle caramellate alla soia, salsa ";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84ZjRiMThiMi1iZTdmLTQ2ZDUtOWE3Mi1iYjdhNzIxYmVjNGYuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 29;
        $food->type_id = 1;
        $food->name = 'Love is Love';
        $food->price = '11.0';
        $food->description = "Noodles, unicorn di riso con mix di verdure uovo, salmone, edamame, mandorle a scaglie, ananas, salsa Bali e teriyaki";
        $food->ingredients = "Noodles di riso, mix di verdure,  uovo, salmone, edamame, mandorle a scaglie, ananas, salsa Bali e teriyaki";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC82YWNiNGM5OC0xYTRkLTQ0YTYtYmQwYy0zMTE0OTg5NGIwNmUuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 29;
        $food->type_id = 1;
        $food->name = 'Nems Vietnamiti';
        $food->price = '5.0';
        $food->description = "Piccoli involtini con all'interno verdure e maiale serviti con germogli di soia e menta";
        $food->ingredients = "Verdure, maiale, germogli di soia e menta";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC82NDY1Y2NlNi1lN2Q0LTRmZWItYmI0Yi0xOGEyNjdiZjYzZjAuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // thai_userid30 ok
        $food = new Food();
        $food->user_id = 30;
        $food->type_id = 1;
        $food->name = 'Dim Sum Party';
        $food->price = '7.0';
        $food->description = "2 wok rolls + 2 veggie dumplings + 2 wok dumplings + 2 ebi dumplings, serviti con agrodolce e ginger soy.";
        $food->ingredients = "wok rolls, veggie dumplings, wok dumplings, ebi dumplings, agrodolce e ginger soy.";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84YTI1OTY4NC1iZjgxLTRkZWQtOGRhYy0wOTM3MzIyMWZkMDQuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 30;
        $food->type_id = 1;
        $food->name = 'Chow Mein';
        $food->price = '8.0';
        $food->description = "noodles artigianali con tacchino speziato, piselli e semi di sesamo. ";
        $food->ingredients = "noodles, tacchino speziato, piselli e semi di sesamo. ";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8yN2Q5M2NiNi04NDQ0LTQ5ZjQtYTkxOC00OTgyNWU1YTRiNjEuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 30;
        $food->type_id = 1;
        $food->name = 'Yakisoba';
        $food->price = '5.0';
        $food->description = "ricetta giapponese con noodles artigianali, pollo, gamberi, funghi shiitake, peperoni, cavolo, zenzero rosa e semi di sesamo.";
        $food->ingredients = " noodles, pollo, gamberi, funghi shiitake, peperoni, cavolo, zenzero rosa e semi di sesamo.";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8yMmY0MmQyMy1lOWI5LTQzMDAtOTIzMC0wZTA1MmMyNzJmYzIuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // thai_userid31 ok
        $food = new Food();
        $food->user_id = 31;
        $food->type_id = 1;
        $food->name = 'Bang Bang Cauliflower';
        $food->price = '8.0';
        $food->description = "Croccanti Cavolfiori Saltati al Wok con Salsa Firecracker, con Cipolla Rossa e Cippollotto. Guarniti con Zenzero Fresco e Coriandolo.";
        $food->ingredients = "Cavolfiori, salsa firecracker, cipolla rossa, cippollotto, zenzero, coriandolo.";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9lYThmNzJkNS1iNTk2LTQxOGEtOTQ1Ni0xODNiYzMxMTg4YjQ=' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 31;
        $food->type_id = 1;
        $food->name = 'Pad Thai - Pollo e Gamberi';
        $food->price = '10.0';
        $food->description = "Noodles di Riso in Salsa di Tamarindo con Uovo, Germogli, Porri, Chilli e Cipolla Rossa. Guarniti con Scalogno Fritto, Arachidi, Erbe Fresche e Lime.";
        $food->ingredients = "Noodles riso, salsa di tamarindo, uovo, germogli, porri, chilli, cipolla rossa, scalogno fritto, arachidi, erbe fresche e lime.";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9lYzJkOWFkMi00YjJiLTQ1MmYtOThmOS03YWIyNzQ1ODY1YTc=' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 31;
        $food->type_id = 1;
        $food->name = 'Katsu Curry - Pollo';
        $food->price = '10.0';
        $food->description = "In Croccante Impanatura Panko, con Salsa Curry Aromatica, con un Contorno di Riso e Insalata Mista.";
        $food->ingredients = "Impanatura panko, salsa curry aromatica, riso e insalata mista.";
        $food->visible = 1;
        $food->image = '' ;
        $food->additional_details = '...';
        $food->save();

        
        // thai_userid32 ok
        $food = new Food();
        $food->user_id = 32;       
        $food->type_id = 1;
        $food->name = 'Miso aubergine';
        $food->price = '10.0';
        $food->description = "melanzane fritte. funghi shiitake. spinaci. zenzero. ";
        $food->ingredients = "melanzane fritte. funghi shiitake. spinaci. zenzero. ";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9mNmQ3MDQwZC1hOTNhLTQyYTktYmFlZi1iNmZjMzhkNzNiNDAuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 32;       
        $food->type_id = 1;
        $food->name = 'Pad Thai Salad';
        $food->price = '9.0';
        $food->description = "Pollo allo Zenzero e Gamberetti Serviti su un Letto di Insalata Mista, Taccole, Pomodori Pelati, Barbabietole Sminuzzate in Sottoaceto, Carote e Cipolla Rossa. Guarnito con Scalogno Fritto e Servito con un Contorno di Noccioline e Rivestita con Salsa Nouc Cham e Miso allo Zenzero";
        $food->ingredients = "Pollo allo zenzero, gamberetti, insalata mista, taccole, pomodori pelati, barbabietole sSottoaceto, carote e cipolla rossa";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9mOTUzYTdkZC0zOGE3LTRjNjEtYWYwYy00MjBiNDU2N2E5NDg=' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 32;       
        $food->type_id = 1;
        $food->name = 'Beef yakimeshi';
        $food->price = '13.0';
        $food->description = "Controfiletto adagiato su riso e condito con uovo fritto e pasta piccantee";
        $food->ingredients = "Controfiletto, riso bianco, taccola, carota, cipolla rossa e cipollotto, patata dolce, zucca, cetriolo, scalogno, uovo fritto e pasta piccante";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84MzQ1ZGEyZi03MjYzLTQwMGUtYTkxNS1hMWUzOThmM2UwYWQuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // italiano_userid33 ok
        $food = new Food();
        $food->user_id = 33;
        $food->type_id = 1;
        $food->name = 'Tortellini bolognesi panna e prosciutto';
        $food->price = '7.0';
        $food->description = "Tortelli freschi all'uovo con panna e prosciutto";
        $food->ingredients = "Tortelli freschi all'uovo, panna, prosciutto, formaggio";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9jNzc3NjIyOS05YjU4LTQ5MzAtOGFiNS1kNDg4MmVhOTdkYmIuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 33;
        $food->type_id = 1;
        $food->name = 'Cotoletta di pollo';
        $food->price = '12.0';
        $food->description = "Cotoletta di pollo con patate";
        $food->ingredients = "Cotoletta di pollo, patate";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC81YWM1NDY0OC00YzAwLTQ1OWQtYmNlZC0zZmZkNWI2M2QzYTEuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 33;
        $food->type_id = 1;
        $food->name = 'Spaghetti alle vongole';
        $food->price = '10.0';
        $food->description = "Spaghetti alle vongole pescate in giornata";
        $food->ingredients = "Spaghetti, vongole, olio";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83MTYxNzY1NC0zNzgyLTRiODItODg1Ni1hODliNGU0NGFjYzQuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // italiano_userid34 ok
        $food = new Food();
        $food->user_id = 34;
        $food->type_id = 1;
        $food->name = 'Bruschetta burrata e pomodoro';
        $food->price = '5.0';
        $food->description = "Bruschetta burrata e pomodoro";
        $food->ingredients = "Bruschetta, burrata, olio, pomodoro";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8zYTFiYzk5Ny0xMmQxLTRhNWItOWZkZi01YjAwODI4YWNlNTQuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 34;
        $food->type_id = 1;
        $food->name = 'Rigatoni tonno e pistacchi';
        $food->price = '10.0';
        $food->description = "Rigatoni con tonno e pistacchi siciliani";
        $food->ingredients = "Rigatoni, tonno, pistacchi DOP";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84NTc0OGVmOC02NTQzLTQwZjAtYWRhYS01YTU4MDYwYThjNWYuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 34;
        $food->type_id = 1;
        $food->name = 'Mezzemaniche alla crudaiola';
        $food->price = '5.0';
        $food->description = "Mezzemaniche di lenticchie, dadolata di pomodoro, basilico, ricotta salata";
        $food->ingredients = "Pasta con farina di lenticchie, dadolata di pomodoro, basilico, ricotta salata, olio";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8wNWU1NjBhNi0yOTRiLTQyYmEtOWEyMi1hY2E5Zjk0MWEwNDMuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // italiano_userid35ok
        $food = new Food();
        $food->user_id = 35;
        $food->type_id = 1;
        $food->name = 'Ravioli al Pomodoro';
        $food->price = '5.0';
        $food->description = "Pasta fresca all’uovo ripiena di ricotta fresca e pomodoro, 100% italiani";
        $food->ingredients = "Ravioli, pomodoro, olio";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9lMmU4ZTlhNy0yNDdkLTQwZGQtYTRkYy05YjIxYjI5NzYyYzIuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 35;
        $food->type_id = 1;
        $food->name = 'Penne all\'Arrabbiata';        
        $food->price = '8.0';
        $food->description = "Pasta di semola Rummo all'arrabbiata con pomodoro italiano";
        $food->ingredients = "Pasta di semola Rummo all'arrabbiata con pomodoro italiano, olio e formaggio";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83MDU1NDVjNC0yMjU0LTRkNDAtODA3ZS0xOGVkZDJkNzBkMjEuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 35;
        $food->type_id = 1;
        $food->name = 'Tortellini con Panna e Prosciutto';
        $food->price = '7.0';
        $food->description = "Un piatto dal sapore italiano e conosciuto in tutto il mondo";
        $food->ingredients = "Pasta fresca all'uovo, panna fresca italiana";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80ZGU3ZGY4Ny02ZjNlLTRhMTgtODNjYy0yNjIyNjM0MmM4MzEuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // italiano_userid36ok
        $food = new Food();
        $food->user_id = 36;
        $food->type_id = 1;
        $food->name = 'Testaroli';
        $food->price = '5.0';
        $food->description = "Testaroli di Pontremoli al pesto";
        $food->ingredients = "farina, pesto, olio";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83NmUwYzhjMC1hNTc3LTQzYjYtODUwZi0yOGE2NDNiYzNjMzYuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 36;
        $food->type_id = 1;
        $food->name = 'Pesto di pomodoro secchi e mandorle';
        $food->price = '5.0';
        $food->description = "Caserecce al pesto di pomodori secchi e mandorle";
        $food->ingredients = "farina, pomodori, mandorle, olio";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9hOTZkNTg0Zi01MmViLTRlMDQtODdlZS01NDY1NjA3YWQyYzAuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 36;
        $food->type_id = 1;
        $food->name = 'Norma';
        $food->price = '5.0';
        $food->description = "Caserecce alla Norma";
        $food->ingredients = "farina, pomodoro, melanzane fritte, ricotta salata e basilico";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8xZTc2YTFjNi01OWVlLTRmZDQtOTk0Yi1mNmJiZTczMDhkMDcuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();


        // italiano_userid37ok
        $food = new Food();
        $food->user_id = 37;
        $food->type_id = 1;
        $food->name = 'Fior d\'acciuga';
        $food->price = '10.0';
        $food->description = "Risotto con stracciatella, fiori di zucca, alici e zeste di lime";
        $food->ingredients = "Stracciatella, fiori di zucca, alici e zeste di lime";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9hODZjMmQ0MC1lNTFmLTQ3NzItODdkOS0xNDc1ZmQxNTcyMmEuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 37;
        $food->type_id = 1;
        $food->name = 'Pepperoni';
        $food->price = '5.0';
        $food->description = "Risotto con salsa di peperoni di Carmagnola, stracciatella, limone bruciato e chorizo";
        $food->ingredients = "Salsa di peperoni di Carmagnola, stracciatella, limone bruciato e chorizo";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8xNjc4NTgxYy0zZjllLTQwODAtYmQyYy1lZGJkYWIyNTE4MTYuanBlZw==' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 37;
        $food->type_id = 1;
        $food->name = 'Saporito Confit';
        $food->price = '5.0';
        $food->description = "Risotto con crema di scalogno, cipolla caramellata e lardo di patanegra";
        $food->ingredients = "Crema di scalogno, cipolla caramellata e lardo di patanegra";
        $food->visible = 1;
        $food->image = 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83NDQ1YjJhMy01OWUzLTRlYTgtOTM5NS0xMzU4YWE2ZTI3ZjY=' ;
        $food->additional_details = '...';
        $food->save();


        //greco_userid38ok
        $food = new Food();
        $food->user_id = 38;
        $food->type_id = 1;
        $food->name = 'Tzatziki tradizionale';
        $food->price = '5.0';
        $food->description = "Tradizionale salsa Greca preparata senz’aglio con yogurt Greco, cetrioli tagliati alla julienne, aneto fresco, olio extra vergine d’oliva Greco";
        $food->ingredients = "Yogurt Greco, cetrioli tagliati alla julienne, aneto fresco, olio extra vergine d’oliva Greco";
        $food->visible = 1;
        $food->image = 'https://www.nonsprecare.it/wp-content/uploads/2014/08/RICETTA-ORIGINALE-TZATZIKI-GRECO-2.jpg' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 38;
        $food->type_id = 1;
        $food->name = 'Pita Gyros';
        $food->price = '10.0';
        $food->description = "Pita gyros originale Greek Fusion farcita a scelta";
        $food->ingredients = "farina, formaggio greco";
        $food->visible = 1;
        $food->image = 'https://primochef.it/wp-content/uploads/2019/05/SH_gyros-1200x800.jpg.webp' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 38;
        $food->type_id = 1;
        $food->name = 'Pita Vegetariana Choriatiki Salata';
        $food->price = '8.0';
        $food->description = "Piadina greca con verdure alla griglia, tzatziki, patatine fritte, pomodori, insalata, cipolla rossa, paprika.";
        $food->ingredients = "farina, verdure alla griglia, tzatziki, patatine fritte, pomodori, insalata, cipolla rossa, paprika.";
        $food->visible = 1;
        $food->image = 'http://www.gyrosteriayannis.com/wp-content/uploads/2017/03/pita-vegetariana.jpg' ;
        $food->additional_details = '...';
        $food->save();


        //greco_userid39 ok
        $food = new Food();
        $food->user_id = 39;
        $food->type_id = 1;
        $food->name = 'Pita con falafel di ceci';
        $food->price = '8.0';
        $food->description = "Pita con falafel di ceci, l'originale";
        $food->ingredients = "farina,falafel di ceci, cipolla";
        $food->visible = 1;
        $food->image = 'https://static.cookist.it/wp-content/uploads/sites/21/2017/04/pita-falafel.png' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 39;
        $food->type_id = 1;
        $food->name = 'Souvlaki';
        $food->price = '5.0';
        $food->description = "Il souvlaki è il classico spiedino della tradizione culinaria greca: si prepara con bocconcini di carne insaporiti in una marinatura di olio, succo di limone e erbe aromatiche e poi grigliati";
        $food->ingredients = "carne, marinatura di olio, succo di limone e erbe aromatiche";
        $food->visible = 1;
        $food->image = 'https://static.cookist.it/wp-content/uploads/sites/21/2018/02/chicken-souvlaki-6-638x425.jpg' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 39;
        $food->type_id = 3;
        $food->name = 'Melopita';
        $food->price = '5.0';
        $food->description = "dolce greco molto simile alla classica cheesecake, ma senza la base di biscotti.";
        $food->ingredients = "formaggio, farina";
        $food->visible = 1;
        $food->image = 'https://static.cookist.it/wp-content/uploads/sites/21/2021/07/melopita1-638x425.jpg' ;
        $food->additional_details = '...';
        $food->save();

        
        //pasticceria_userid40ok
        $food = new Food();
        $food->user_id = 40;
        $food->type_id = 3;
        $food->name = 'Macarons Assortiti';
        $food->price = '5.0';
        $food->description = "Il Macaron è un dolce composto da due gusci meringati che nascono dalla combinazione di delicatissimi albumi montati a neve e pregiate mandorle macinate finemente. Il ripieno è costituito da una morbida crema.";
        $food->ingredients = "farina, meringa, crema";
        $food->visible = 1;
        $food->image = 'https://cdn.shopify.com/s/files/1/0435/9700/4957/products/Macarons-Assortiti_600x.jpg?v=1630078844' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 40;
        $food->type_id = 3;
        $food->name = 'Torta Perfetta';
        $food->price = '5.0';
        $food->description = "Frolla che racchiude massa alla nocciola, note agrumate della scorza di limone e di arancia";
        $food->ingredients = "Farina, nocciola, agrumi";
        $food->visible = 1;
        $food->image = 'https://cdn.shopify.com/s/files/1/0435/9700/4957/products/Torta-perfetta_02_600x.jpg?v=1602162303' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 40;
        $food->type_id = 3;
        $food->name = 'Gelatine di Frutta';
        $food->price = '5.0';
        $food->description = "Gelatine di frutta con gusti assortiti";
        $food->ingredients = "Zucchero, frutta, coloranti";
        $food->visible = 1;
        $food->image = 'https://cdn.shopify.com/s/files/1/0435/9700/4957/products/Gelatine-di-frutta_generale_600x.jpg?v=1602162289' ;
        $food->additional_details = '...';
        $food->save();

        //pasticceria_userid41ok
        $food = new Food();
        $food->user_id = 41;
        $food->type_id = 3;
        $food->name = 'Donut';
        $food->price = '5.0';
        $food->description = "Classica ciambella made in USA farcita";
        $food->ingredients = "Farina, burro, crema";
        $food->visible = 1;
        $food->image = 'http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcT7FNhSxIjYXigAY1UsmS1BUhcue-1TsJJXgEPYN3p69bMehy2_hNe_odvlfoPeBCl2L-FCMt-7AUROYQIZ6fQ' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 41;
        $food->type_id = 3;
        $food->name = 'Chocolate muffin';
        $food->price = '5.0';
        $food->description = "Chocolate muffin ripieno di fondente";
        $food->ingredients = "farina, cioccolato fondente, burro";
        $food->visible = 1;
        $food->image = 'https://www.irenemilito.it/wp-content/uploads/2020/09/IGT2-Best-Vegan-Gluten-Free-Moist-Chocolate-Muffins-Recipe-Easy-Double-Chocolate-Chip-Muffins-1.jpg' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 41;
        $food->type_id = 3;
        $food->name = 'Strawberry & cream';
        $food->price = '5.0';
        $food->description = "Waffle farcito con fragole fresche e panna montata";
        $food->ingredients = "Farina, fragole, panna, burro";
        $food->visible = 1;
        $food->image = 'https://static.onecms.io/wp-content/uploads/sites/19/2013/07/26/strawberry-cream-cheese-waffle-sandwiches-ck-x.jpg' ;
        $food->additional_details = '...';
        $food->save();

        //pasticceria_userid42ok
        $food = new Food();
        $food->user_id = 42;
        $food->type_id = 3;
        $food->name = 'La Prova Del Curioso';
        $food->price = '15.0';
        $food->description = "Degustazione di tutti i nostri mini cannoli";
        $food->ingredients = "Farina, pesce, carne, ricotta";
        $food->visible = 1;
        $food->image = 'https://www.lacannoleriagourmet.it/resources/images/menu-min/cannolo_curioso.jpg' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 42;
        $food->type_id = 3;
        $food->name = 'La Brioche al Pistacchio';
        $food->price = '5.0';
        $food->description = "Brioche al pistacchio siciliano e gelato";
        $food->ingredients = "Farina, gelato crema, pistacchio";
        $food->visible = 1;
        $food->image = 'https://www.lacannoleriagourmet.it/resources/images/menu-min/brioche_pistacchio.jpg' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 42;
        $food->type_id = 3;
        $food->name = 'Golosa';
        $food->price = '5.0';
        $food->description = "Brioche salata, braciole di carne siciliane, crema al pistacchio, ricotta salata ";
        $food->ingredients = "Farina, carne, pistacchio, ricotta";
        $food->visible = 1;
        $food->image = 'https://www.lacannoleriagourmet.it/resources/images/menu-min/brioche_golosa.jpg' ;
        $food->additional_details = '...';
        $food->save();
    
       
        //pasticceria_userid43
        $food = new Food();
        $food->user_id = 43;
        $food->type_id = 1;
        $food->name = 'Torta Griglia';
        $food->price = '20.0';
        $food->description = "Una base di pasta frolla ricoperta da uno strato vellutato di marmellata di albicocche";
        $food->ingredients = "Farina, albicocche, burro";
        $food->visible = 1;
        $food->image = 'https://www.panarello.com/wp-content/uploads/2019/04/Torta-Griglia-panarello.png.webp' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 43;
        $food->type_id = 1;
        $food->name = 'Torta Panarello';
        $food->price = '5.0';
        $food->description = "La torta di mandorle";
        $food->ingredients = "Farina, mandorle, burro";
        $food->visible = 1;
        $food->image = 'https://www.panarello.com/wp-content/uploads/2019/04/Torta-Panarello-ok.png.webp' ;
        $food->additional_details = '...';
        $food->save();

        $food = new Food();
        $food->user_id = 43;
        $food->type_id = 1;
        $food->name = 'Torta Negrita';
        $food->price = '5.0';
        $food->description = "Arricchita di cacao nel suo impasto e farcita con un dolce velo di marmellata di albicocche";
        $food->ingredients = "Farina, cioccolato, albicocche, burro";
        $food->visible = 1;
        $food->image = 'https://www.panarello.com/wp-content/uploads/2019/04/negrita-rid.png.webp' ;
        $food->additional_details = '...';
        $food->save();
    }

       
}
