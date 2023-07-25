<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rally MOB FT 2023</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            background-color: #120238;
        }
    </style>
</head>


<body>
    <div class="container text-center">
        <div class="card card-rounded my-5 mx-3 py-5">
            <h1 class="text-mob">Magic</h1>
            <img class="w-100" src="{{ asset('image/progress/magic' . $img['Magic'] . '.png') }}">
            <h3 class="text-mob">{{$percent['Magic']}}%</h3>
        </div>
        <div class="card card-rounded my-5 mx-3 py-5">
            <h1 class="text-mob">AI</h1>
            <img class="w-100" src="{{ asset('image/progress/ai' . $img['AI'] . '.png') }}">
            <h3 class="text-mob">{{$percent['AI']}}%</h3>
        </div>
        <div class="card card-rounded my-5 mx-3 py-5">
            <h1 class="text-mob">Real Life</h1>
            <img class="w-100" src="{{ asset('image/progress/rl' . $img['Real Life'] . '.png') }}" alt="">
            <h3 class="text-mob">{{$percent['Real Life']}}%</h3>
        </div>
        <div class="card card-rounded my-5 mx-3 py-5">
            <h1 class="text-mob">Fairy</h1>
            <img class="w-100" src="{{ asset('image/progress/fairy' . $img['Fairy'] . '.png') }}" alt="">
            <h3 class="text-mob">{{$percent['Fairy']}}%</h3>
        </div>
        <div class="card card-rounded my-5 mx-3 py-5">
            <h1 class="text-mob">Space</h1>
            <img class="w-100" src="{{ asset('image/progress/space' . $img['Space'] . '.png') }}" alt="">
            <h3 class="text-mob">{{$percent['Space']}}%</h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
