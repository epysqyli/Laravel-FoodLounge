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

        // cinese categoria 1 id 1
        $food = new Food();
        $food->user_id = 1;
        $food->type_id = 1;
        $food->name = "Vermicelli Hong Kong Taste";
        $food->price = "5.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Spaghetti di riso, gamberi e verdure";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kYjhmMjI1Ny01NjFlLTQ2YTQtYmZiOS0xODlkZjJiZjZjOWEuanBlZw==";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 1;
        $food->type_id = 2;
        $food->name = "Gamberi e farina di riso con salsa di soia";
        $food->price = "6.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Gamberi e farina di riso con salsa di soia";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84YTdkNDYyNi04NWViLTRmZDUtYTJhMy0wODA5ZDZjYzJmYzUuanBlZw==";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 1;
        $food->type_id = 2;
        $food->name = "Cheung Fun al Manzo";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Manzo e farina di riso con salsa di soia";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/305914b3-a007-409d-81f7-979d7cb9a512.jpeg";
        $food->save();

        // cinese categoria 1 id 2
        $food = new Food();
        $food->user_id = 2;
        $food->type_id = 2;
        $food->name = "Menu Fisso Hainan";
        $food->price = "13.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Menù composto da: -Pollo Hainan -Riso marinato con zuppa di pollo -Zuppa di pollo Accompagnato con 3 salse: -Salsa al peperoncino e limone -Salsa di soia al pollo -Olio allo zenzero e scalogno";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/82484ac5-1617-4e24-807d-181c537ef74e.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 2;
        $food->type_id = 2;
        $food->name = "Menù Fisso di Manzo";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Tagliatelle di riso al manzo, polpette di manzo, insalata di verdure, acqua o bibita a scelta";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/f3df89e4-5cb2-4776-add8-8be5017c9e10.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 2;
        $food->type_id = 2;
        $food->name = "Menù Fisso di Maiale";
        $food->price = "13.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Cotoletta di maiale al lemongrass, noodle saltato con maiale, insalata di verdure, acqua o bibita a scelta";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/f6e50348-2aa4-48cf-bc81-8cd4bf2e180f.jpeg";
        $food->save();
        
        // cinese categoria 1 id 2
        $food = new Food();
        $food->user_id = 2;
        $food->type_id = 2;
        $food->name = "Menu Fisso Hainan";
        $food->price = "13.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Menù composto da: -Pollo Hainan -Riso marinato con zuppa di pollo -Zuppa di pollo Accompagnato con 3 salse: -Salsa al peperoncino e limone -Salsa di soia al pollo -Olio allo zenzero e scalogno";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/82484ac5-1617-4e24-807d-181c537ef74e.jpeg";
        $food->save();

        // cinese categoria 1 id 3
        $food = new Food();
        $food->user_id = 3;
        $food->type_id = 1;
        $food->name = "Mini Bao";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "4 pezzi del classico Bao con ripieno di carne in versione mini";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/07483875-be89-4c28-b9df-9ff12ffa92f1.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 3;
        $food->type_id = 2;
        $food->name = "Bento Pollo Gongbao e Straccetti di Pollo";
        $food->price = "9.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Bento con pollo in salsa gongbao, straccetti di pollo";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/6543b0c1-64bb-463e-b471-67539f90464c.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 3;
        $food->type_id = 2;
        $food->name = "Braciola di Maiale al Lemongrass";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Braciola di Maiale al Lemongrass su letto di verdure fresche";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/27ebbb4c-c8bf-45ef-b147-49d152916935.jpeg";
        $food->save();

        // cinese categoria 1 id 4
        $food = new Food();
        $food->user_id = 4;
        $food->type_id = 2;
        $food->name = "Polpette di Manzo";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Con salsa verde agli spinaci e wasabi";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/abffe5ee-66a8-418d-b3ec-83c36a986946.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 4;
        $food->type_id = 1;
        $food->name = "Noodle Saltato con Gamberi";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Noodle, verdure e gamberi";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/867658e6-0840-489a-bda9-f3550ad573f8.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 4;
        $food->type_id = 2;
        $food->name = "Involtini di Soia con Gamberi Tartufati e Tofu";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Con salsa al tartufo";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/f6758268-5d2d-41aa-abd7-2ab311efe28a.jpeg";
        $food->save();

        // cinese categoria 1 id 5
        $food = new Food();
        $food->user_id = 5;
        $food->type_id = 1;
        $food->name = "Riso Saltato con Gamberi";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Riso, verdure e gamberi";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/610aeddf-a08b-4cf5-a3bd-bcd84ba8bafb.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 5;
        $food->type_id = 1;
        $food->name = "Noodle Saltato con Maiale";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Noodle, verdure e maiale";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/68bcff77-4d94-456c-8509-a34d4712d5d0.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 5;
        $food->type_id = 1;
        $food->name = "Wanton di gamberi in zuppa";
        $food->price = "5.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Ravioli in gamberi con zuppa";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/728e4508-417e-4431-9ef3-dbfc3b1a7cf4.jpeg";
        $food->save();

        $food = new Food();
        $food->user_id = 5;
        $food->type_id = 1;
        $food->name = "Noodles Saltato con Braciola di Maiale e Formaggio";
        $food->price = "5.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Noodles saltato in wok con braciola di maiale alla piastra e formaggio";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/deb2ccf9-a3de-42a4-a6a2-5dd18c13b9d9.jpeg";
        $food->save();

        // giapponese categoria 2 id 6
        $food = new Food();
        $food->user_id = 6;
        $food->type_id = 1;
        $food->name = "Sushi Misto G";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "4 Nigiri Misti, 4 Hosomaki e 6 Uramaki Salmone";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84N2Q1ZjY4Yy1jMTM1LTQ3YjgtYTI2ZC1lMDcxZDA1ZjFiOTcuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 6;
        $food->type_id = 1;
        $food->name = "Sushi misto 60 pezzi";
        $food->price = "35.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "6 tipi di roll da 8 pezzi e 12 nigiri misto";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83MGFmZjY3OC1iOTE5LTQ5ZjYtYjNiOC02OTc5MmY0ZjY4NTUuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 6;
        $food->type_id = 1;
        $food->name = "Sushi Misto B";
        $food->price = "10.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "3 Nigiri e 3 Sashimi Salmone";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9lMjNkMzkwNC1iNzA1LTQ4MGItOTMzOS1lOTI5NDk3ZDFiYmYuanBlZw==";
        $food->save();
        
        // giapponese categoria 2 id 7
        $food = new Food();
        $food->user_id = 7;
        $food->type_id = 1;
        $food->name = "mixed sando";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Il Sando è un golosissimo sandwich della gastronomia giapponese";
        $food->visible = true;
        $food->image = "https://sushidaily.com/assets/front/images/uploads/dishes/sando-mix.1620147574.web.jpg";
        $food->save();

        $food = new Food();
        $food->user_id = 7;
        $food->type_id = 1;
        $food->name = "mixed sandoBowl di tartare e chirashi";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Ciotola del nostro delizioso riso all'aceto, ricoperto di tartare di salmone, avocado, menta e coriandolo ";
        $food->visible = true;
        $food->image = "https://sushidaily.com/assets/front/images/uploads/dishes/salmon-tartare-w.1544484893.web.jpg";
        $food->save();

        $food = new Food();
        $food->user_id = 7;
        $food->type_id = 1;
        $food->name = "Maki california";
        $food->price = "9.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Maki di riso all'aceto, alga nori, salmone, avocado e sesamo";
        $food->visible = true;
        $food->image = "https://sushidaily.com/assets/front/images/uploads/dishes/maki-california-salmon-w-2.1545055893.web.jpg";
        $food->save();

        // giapponese categoria 2 id 8
        $food = new Food();
        $food->user_id = 8;
        $food->type_id = 1;
        $food->name = "Uramaki Ebi Tem";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Gamberi fritti all'interno e cipolla fritta all'esterno";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83Y2RlYWVlYS00ZThiLTQ5ZmEtODg3Yi02ODgxZTUzODM2NjUuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 8;
        $food->type_id = 1;
        $food->name = "Nighiri di salmone scottati ";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Nighiri di salmone scottati";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80NjJjZmUzNi1mMWJkLTQxZDEtODhlZC04NDIzNjI2OTgzYjUucG5n";
        $food->save();

        $food = new Food();
        $food->user_id = 8;
        $food->type_id = 1;
        $food->name = "Gunkan Philadelphia";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Gunkan di Philadelphia";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9hOTM5MzQ5ZS05YjgxLTRjZmEtOGU3OS1mMzI1M2QyZjFhZGQucG5n";
        $food->save();

        // giapponese categoria 2 id 9
        $food = new Food();
        $food->user_id = 9;
        $food->type_id = 1;
        $food->name = "Uramaki Salmone e Philadelphia";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "salmone, philadelphia, sesamo, 8pz";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8yMjZmMThlZi0yN2MxLTQ3MDgtOWFlMy01MmI3NWIwZDM5NjkuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 9;
        $food->type_id = 1;
        $food->name = "Sashimi Misto";
        $food->price = "25.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Salmone, tonno e ricciola affettati con gambero rosso, vongola artica, 14 pezzi";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kZjZkNDJjMS1iN2M0LTRlMmUtODE0Yi0zYTlkMGVjNmNjYzkucG5n";
        $food->save();

        $food = new Food();
        $food->user_id = 9;
        $food->type_id = 1;
        $food->name = "Sashimi Misto";
        $food->price = "25.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Salmone, tonno e ricciola affettati con gambero rosso, vongola artica, 14 pezzi";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kZjZkNDJjMS1iN2M0LTRlMmUtODE0Yi0zYTlkMGVjNmNjYzkucG5n";
        $food->save();
        
        // giapponese categoria 2 id 10
        $food = new Food();
        $food->user_id = 10;
        $food->type_id = 1;
        $food->name = "Mix gran ravioli";
        $food->price = "15.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Ravioli di verdure, pollo e gamberi alla piastra";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80YmUxYzFhOS0wYmZmLTQyNDQtYjg4OC1iNmMxNjZiYjAyODAuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 10;
        $food->type_id = 2;
        $food->name = "Polpette di Pollo Fritte";
        $food->price = "15.00";
        $food->description = "Carne di pollo fritta e salsa";
        $food->ingredients = "La nostra descrizione";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/80eff709-d35b-4176-9649-d7d4d1114e98.jpeg";
        $food->save();

        // pizzeria categoria 3 id 11
        $food = new Food();
        $food->user_id = 11;
        $food->type_id = 2;
        $food->name = "Pizza salsiccia e parmigiano";
        $food->price = "5.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Salsiccia di Mora Romagnola, pomodoro, parmigiano reggiano 24 mesi, semi di finocchio";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/3cf0a108-a2a0-427e-9313-1a8aba78a22b.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 11;
        $food->type_id = 2;
        $food->name = "Pizza napoli";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Acciughe, capperi, fiordilatte, pomodoro e origano";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/193982a1-8e41-4677-b48b-fa428119fbbd.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 11;
        $food->type_id = 2;
        $food->name = "Pizza salsiccia e parmigiano";
        $food->price = "8.00";
        $food->description = "Pizza mediterranea";
        $food->ingredients = "Olive nere, cipolla rossa saltata, pomodoro e origano";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/206c5619-cf50-49b7-8932-451a3822485d.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        // pizzeria categoria 3 id 12
        $food = new Food();
        $food->user_id = 12;
        $food->type_id = 2;
        $food->name = "Melanzangel";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Sugo di pomodoro e basilico, melanzane a funghetto, pesto alla trapanese, mozzarella di bufala campana, basilico fresco e parmigiano grattugiato fresco";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/c3edddf1-adb1-4a82-bfb5-0821ae6528e8.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 12;
        $food->type_id = 2;
        $food->name = "Ottanta voglia di 80";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Sugo di pomodoro e basilico, melanzane a funghetto, pesto alla trapanese, mozzarella di bufala campana, basilico fresco e parmigiano grattugiato fresco";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/91f402e6-786e-4f4e-9265-3180a9eb8438.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 12;
        $food->type_id = 2;
        $food->name = "Salsiccia, Patata e l'Altra";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Pecorino grattugiato, rosmarino, patate arrosto, salsiccia del salumificio Gamba e crema di Parmigiano Reggiano Dop 24 mesi";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/f0e44c81-1402-410e-8c4d-c4f284c1f30d.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();
        
        // pizzeria categoria 3 id 13
        $food = new Food();
        $food->user_id = 13;
        $food->type_id = 2;
        $food->name = "Pizza Diavola";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Pomodoro Roma, Mozzarella, salamino piccante e basilico";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/c15caf1e-6a27-49bd-b127-7a12f2e0b6c9.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 13;
        $food->type_id = 2;
        $food->name = "Pizza Bianca, Cotto e Funghi";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Mozzarella, fior di panna, funghi champignon, prosciutto cotto Rovagnati e basilico.";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/5d70b242-6da0-4a54-93c4-14649b8b504c.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 13;
        $food->type_id = 2;
        $food->name = "Pizza Picciosa Vegana";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Pomodoro Roma, mozzariso, funghi champignon, carciofini e olive nere";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/661f82bd-f437-4d8d-b2a4-fd38846e150f.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        // pizzeria categoria 3 id 14
        $food = new Food();
        $food->user_id = 14;
        $food->type_id = 2;
        $food->name = "Pulcinella";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Pomodoro San Marzano condimento Un'Altra Pasta e mozzarella fiordilatte DOP";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/2a677398-5e18-47de-9be8-db25ac74cd50.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 14;
        $food->type_id = 2;
        $food->name = "Luganega";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Mozzarella fiordilatte DOP, salsiccia luganega, patate e squacquerone di romagna a freddo";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/fe8ca538-7891-4eee-8321-9d5b24e798f4.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();
        
        $food = new Food();
        $food->user_id = 14;
        $food->type_id = 2;
        $food->name = "Gorgonduja";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Pomodoro San Marzano condimento Un'Altra Pasta, mozzarella fiordilatte DOP, gorgonzola Novara IGP e nduja di Spilinga medio piccante";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/13b5befd-321a-48da-932f-6565328a640f.jpeg";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        // pizzeria categoria 3 id 15
        $food = new Food();
        $food->user_id = 15;
        $food->type_id = 2;
        $food->name = "Salsiccia e Peperoni";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Mozzarella, Pomodoro, Salsiccia e Peperoni.";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/5350409c-c074-4779-8c62-451507d3dc27";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 15;
        $food->type_id = 2;
        $food->name = "Carletto";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Mozzarella, Pomodoro, Gamberetti e Rucola";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/7aeb8b43-2f4f-45a1-8823-c541defb13a7";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 15;
        $food->type_id = 2;
        $food->name = "Funghi Porcini";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Mozzarella, Pomodoro e Funghi Porcini";
        $food->visible = true;
        $food->image = "https://d1ralsognjng37.cloudfront.net/623760e1-d2ff-46b5-84ce-178d120cd0af";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        // categoria fast food 4 id 16
        $food = new Food();
        $food->user_id = 16;
        $food->type_id = 2;
        $food->name = "Deli burger al mercato";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Carne della Macelleria Motta (110gr), pane di patate con semi di sesamo, insalata iceberg, pomodoro, cipolla rossa fritta, salsa speciale";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC85ZWM5MTdlOC1jMTUyLTQ5ZTItOGZiOS1iYmM3N2UyMDczMWUuanBlZw==";
        $food->additional_details = "dettagli addizionali";
        $food->save();

        $food = new Food();
        $food->user_id = 16;
        $food->type_id = 2;
        $food->name = "Original Burger Al Mercato";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Carne della Macelleria Motta (110gr), pane di patate con semi di sesamo, insalata iceberg, pomodoro, cipolla rossa fritta, salsa speciale";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kMzNkMGE3MC04OTRjLTQ0MzEtYTc2Yy01ZGE5ZjYzYTliOGYuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 16;
        $food->type_id = 2;
        $food->name = "Vegan Burger di Heura Meat";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Vegan Heura Burger, pane di patate e sesamo, insalata iceberg, pomodoro, salsa speciale";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kODMzZjA0Yi0zNjJmLTRiODEtOTE1ZC01ZjQ1N2YxYTU2NTIuanBlZw==";
        $food->save();

        // categoria fast food 4 id 17
        $food = new Food();
        $food->user_id = 17;
        $food->type_id = 2;
        $food->name = "Box Meal All Star";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Tutte le star del Colonnello in un unico Box Meal. Contiene un panino Double Krunch, un Tender Crispy, una pannocchia, patatine e bibita a scelta";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80YWNiNWU0Ni1hYjhiLTQ0MTQtYTM3Ny0zYzU2NzlkYmZkNmIuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 17;
        $food->type_id = 2;
        $food->name = "COB OR";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Un bucket con 6 pezzi COB Original Recipe, l'irresistibile COB Original Recipe deve il suo sapore inimitabile alla ricetta del Colonnello Sanders, un mix di 11 erbe e spezie segrete";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80YWNiNWU0Ni1hYjhiLTQ0MTQtYTM3Ny0zYzU2NzlkYmZkNmIuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 17;
        $food->type_id = 2;
        $food->name = "Tender Crispy";
        $food->price = "6.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Filetti di pollo, croccanti fuori, tenerissimi dentro. Scegli la tua salsa inclusa";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9jYTUxNWJkOC1lYmJjLTQ2ZmQtOTY0OC1lZDVkNzc5MzBjNWEuanBlZw==";
        $food->save();

        // categoria fast food 4 id 18
        $food = new Food();
        $food->user_id = 18;
        $food->type_id = 2;
        $food->name = "My Selection Chicken Pepper";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "100% petto di pollo italiano avvolto in una nuova croccante panatura, Pecorino Toscano DOP, insalata, pomodoro, salsa ai tre pepi e pane con semi di sesamo.";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC81OGQyMjQ1Yy1kNTg0LTQ1YTgtOGYwOS05MzA0NjY5NzE2ZTAuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 18;
        $food->type_id = 2;
        $food->name = "Gran Crispy McBacon";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Chi ama il Crispy McBacon® ne prenderebbe volentieri un altro e un altro e un altro e un altro ancora. Per questo c’è il Gran Crispy McBacon®: carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l'inconfondibile salsa Crispy. Come il classico, ma ancora più grande.";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9mOThiYjYwNS0yMjU1LTRjMGYtYjNlZi0xZWE2NzEzYmRlN2YuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 18;
        $food->type_id = 2;
        $food->name = "Hamburger";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Carne 100% bovina da allevamenti italiani, arricchita con cipolla a dadini, cetriolo, ketchup e senape. L’Hamburger, un panino semplice che non passa mai di moda.";
        $food->visible = true;
        $food->image = "aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8zYzk5ODMyMi04YmZiLTQwNDQtOTNkZC01NTNmNWJlMWRmYjguanBlZw";
        $food->save();

        // catgoria fast food 4 id 19
        $food = new Food();
        $food->user_id = 19;
        $food->type_id = 2;
        $food->name = "My Selection Chicken Pepper";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "100% petto di pollo italiano avvolto in una nuova croccante panatura, Pecorino Toscano DOP, insalata, pomodoro, salsa ai tre pepi e pane con semi di sesamo.";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC81OGQyMjQ1Yy1kNTg0LTQ1YTgtOGYwOS05MzA0NjY5NzE2ZTAuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 19;
        $food->type_id = 2;
        $food->name = "Gran Crispy McBacon";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Chi ama il Crispy McBacon® ne prenderebbe volentieri un altro e un altro e un altro e un altro ancora. Per questo c’è il Gran Crispy McBacon®: carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l'inconfondibile salsa Crispy. Come il classico, ma ancora più grande..";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9mOThiYjYwNS0yMjU1LTRjMGYtYjNlZi0xZWE2NzEzYmRlN2YuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 19;
        $food->type_id = 2;
        $food->name = "Chicken Country";
        $food->price = "9.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Un panino pensato per chi vuole rimanere leggero, ma non rinuncia al gusto: il petto di pollo alla piastra 100% italiano incontra tutto il gusto del bacon e della cipolla per una combinazione di sapori davvero stuzzicante";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8wMmM0ZWYyNi1hZTAzLTQ3YjUtOTViNC04MjQ0MmMwZDJlMDkuanBlZw==";
        $food->save();

        // categoria indiano 5 id 20
        $food = new Food();
        $food->user_id = 20;
        $food->type_id = 2;
        $food->name = "Chicken Tikka Masala";
        $food->price = "9.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Bocconcini di Pollo con Cremosa Salsa Speziata";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84OWVlY2Q2OS0yNTdjLTQ5NmUtOTlmMS00YjdkZWI5YjZiMTI=";
        $food->save();

        $food = new Food();
        $food->user_id = 20;
        $food->type_id = 2;
        $food->name = "Dal - Lenticchie";
        $food->price = "6.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Legumi Indiani Leggermente Speziata";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9jNGIzODI2OS04NjdhLTQzNjctOTI0My0wMjgyNTY1YjJiNzQ=";
        $food->save();

        $food = new Food();
        $food->user_id = 20;
        $food->type_id = 2;
        $food->name = "Sabzi Curry";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Misto di Verdure con Curry Leggero";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8yYzFiNzM2Mi01MDgxLTQyNTUtYjM0My1mZmI0ZjBmNmIzMjE=";
        $food->save();
        
        // categoria indiano 5 id 21
        $food = new Food();
        $food->user_id = 21;
        $food->type_id = 2;
        $food->name = "Tandoori Misto";
        $food->price = "9.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Varietà di Carne Marinata, Pollo, Tacchino, Agnello e Maiale, Cotti al Forno";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9lODdkMDFjZS1jMTAxLTQ2ZjYtOTFhMi04ODlkMzg0Mzg3ODk=";
        $food->save();

        $food = new Food();
        $food->user_id = 21;
        $food->type_id = 2;
        $food->name = "Antipasti Misti Vegetariani";
        $food->price = "7.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Misto di Antipasti Vegetariani";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9iNTU4MTUyYS00ODBkLTRkNjEtODU4NS0zYjg4MGZiYTcwMGM=";
        $food->save();

        $food = new Food();
        $food->user_id = 21;
        $food->type_id = 2;
        $food->name = "Chicken Roll";
        $food->price = "9.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Rotolo di Pane alla Piastra con Pollo Delicato Tandoori alla Soia";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84NjYwM2E4OS0zMTYxLTQyMTgtYWY0NC1hZTI1MTU2MzlkMWQ=";
        $food->save();
        
        // categoria indiano 5 id 22
        $food = new Food();
        $food->user_id = 22;
        $food->type_id = 2;
        $food->name = "Samosa";
        $food->price = "5.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Fagottino ripieno di verdure cotte";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kNTQxYzNmNC00MWRmLTRjNDEtYTNiMS1iOThjMjg0NmEyY2Q=";
        $food->save();

        $food = new Food();
        $food->user_id = 22;
        $food->type_id = 2;
        $food->name = "Chicken al Curry";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Bocconcini di Pollo Cotti con Curry e Spezie";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC82YjA4YjhjOS0wMjUyLTQwMjgtYTViYy01NTFkMWQwMmM5Y2Y=";
        $food->save();

        $food = new Food();
        $food->user_id = 22;
        $food->type_id = 2;
        $food->name = "Palak Pakora";
        $food->price = "6.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Morbide Frittelle di Verdure Spinaci Fritto in Pastella di Farina di Ceci, 5 pezzi";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8xYzRlNGY2Zi04YmI0LTQ1NmUtYmYzNi02MjVhMWUyMTJmN2Q=";
        $food->save();
        
        // categoria indiano 5 id 23
        $food = new Food();
        $food->user_id = 23;
        $food->type_id = 2;
        $food->name = "Spinaci e Patate";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "spinaci, patate, aglio, olio, zenzero,acqua, pomodori, coriandolo, curcuma, formaggio";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC82MjVlMjBlZC1kZjMwLTRiMDgtYmQ2OC0yNzk5ODIzYzNjMzUuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 23;
        $food->type_id = 2;
        $food->name = "Verdure al Curry";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "verdura mista, olio, pomodoro,curcuma";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kYjA3NmUwOC0wMTMyLTQ3MjItODk0Yy01N2QzMTg5ZDlhZmUuanBlZw==";
        $food->save();

        $food = new Food();
        $food->user_id = 23;
        $food->type_id = 2;
        $food->name = "Chilli Chicken";
        $food->price = "10.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Delizioso Curry Indo-Orientale con Gusto Agrodolce-Piccante di Pollo e Cavolo Ottimo sia con Riso o Pane tandooris";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC81ZDZkM2NmMS04MTczLTRkNTMtOThlYS01YTgyYzcwMWVlMGU=";
        $food->save();

        // categoria indiano 5 id 24
        $food = new Food();
        $food->user_id = 24;
        $food->type_id = 1;
        $food->name = "Riso Pulao";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Classico Piatto di Riso Basmati al Vapore per Mantenere il suo Tipico Aroma da Accompagnare i Vari Piatti Curry Spezati";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83OTgxOWViNS04ZGI1LTRkYzUtYjY4Yi02MjI5ZWNhZDEwZjI=";

        $food = new Food();
        $food->user_id = 24;
        $food->type_id = 1;
        $food->name = "Prawn Pulao";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Basmati Cotto Delicatamente con Gamberi";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8xYzRhYWZhZi0yZDFjLTQ5NjQtOGY4Ni05ZGViZWI4NmRmOTE=";

        $food = new Food();
        $food->user_id = 24;
        $food->type_id = 1;
        $food->name = "Naan";
        $food->price = "8.00";
        $food->description = "La nostra descrizione";
        $food->ingredients = "Pane Soffice con Impasto al Latte";
        $food->visible = true;
        $food->image = "https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9jNTJjM2M3MC05NTk1LTRmNWMtODBjOC0yMjRjMWM3OTMyNDc=";


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
