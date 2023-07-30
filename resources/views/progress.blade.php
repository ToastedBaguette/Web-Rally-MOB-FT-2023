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
        <div class="row my-md-3">
            <div class="col-md-4 my-3">
                {{-- MAGIC --}}
                <div class="card card-rounded mx-3">
                    <img class="h-75" src="{{ asset('image/progress/magic' . $img['Magic'] . '.png') }}">
                    <div class="d-flex justify-content-evenly py-4" style="background-color: indigo">
                        <h3 class="text-mob text-white">Magic</h3>
                        <h3 class="text-mob text-white">{{ $percent['Magic'] }}%</h3>
                    </div>
                </div>

            </div>

            <div class="col-md-4 my-3">
                {{-- AI --}}
                <div class="card card-rounded mx-3">
                    <img class="h-75" src="{{ asset('image/progress/ai' . $img['AI'] . '.png') }}">
                    <div class="d-flex justify-content-evenly py-4" style="background-color: rgb(0, 0, 120)">
                        <h3 class="text-mob text-white">AI</h3>
                        <h3 class="text-mob text-white">{{ $percent['AI'] }}%</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3">
                {{-- Real Life --}}
                <div class="card card-rounded mx-3">
                    <img class="h-75" src="{{ asset('image/progress/rl' . $img['Real Life'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly py-4" style="background-color: rgb(90, 0, 0)">
                        <h3 class="text-mob text-white">Real Life</h3>
                        <h3 class="text-mob text-white">{{ $percent['Real Life'] }}%</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3">
                {{-- Fairy --}}
                <div class="card card-rounded mx-3">
                    <img class="h-75" src="{{ asset('image/progress/fairy' . $img['Fairy'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly py-4" style="background-color: rgb(1, 96, 1)">
                        <h3 class="text-mob text-white">Fairy</h3>
                        <h3 class="text-mob text-white">{{ $percent['Fairy'] }}%</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3">
                {{-- Space --}}
                <div class="card card-rounded mx-3">
                    <img class="h-75" src="{{ asset('image/progress/space' . $img['Space'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly py-4" style="background-color: midnightblue">
                        <h3 class="text-mob text-white">Space</h3>
                        <h3 class="text-mob text-white">{{ $percent['Space'] }}%</h3>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 my-3">
                {{-- Untuk Tema Baru --}}
                <div class="card card-rounded mx-3">
                    <img class="h-75" src="{{ asset('image/progress/space' . $img['Space'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly py-4" style="background-color: midnightblue">
                        <h3 class="text-mob text-white">Idk</h3>
                        <h3 class="text-mob text-white">{{ $percent['Space'] }}%</h3>
                    </div>
                </div>
            </div>
        </div>






    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
