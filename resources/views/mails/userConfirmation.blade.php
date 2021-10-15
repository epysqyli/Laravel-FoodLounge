<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Il tuo ordine</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <h1 class="mt-3 text-center">Ordine Confermato!</h1>
                <h3>{{  }}</h3>
                <h3>L'indirizzo a cui spedire: {{ $order->customer_address }}</h3>


                <div class="row border rounded d-flex justify-content-around align-items-center py-2 my-2 bg-secondary text-white">
                    @foreach ($order->foods as $food)
                        <div class="col-6">{{ $food->name }}</div>
                        <div class="col-6">{{ $food->pivot->food_units }} unit&agrave;</div>
                    @endforeach
                </div>
                <div class="text-center mt-4 mb-2">Deliveboo &trade;</div>
            </div>
        </div>
    </div>

</body>

</html>
