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

        .reveal {
            position: relative;
            transform: translateY(150px);
            opacity: 0;
            transition: 1s all ease;
        }

        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
</head>


<body>
    <div class="container text-center">
            {{-- MAGIC --}}
            <div class="card card-rounded my-5 mx-3">
                <img class="w-100" src="{{ asset('image/progress/magic' . $img['Magic'] . '.png') }}">
                <div class="d-flex justify-content-evenly py-4" style="background-color: indigo">
                    <h1 class="text-mob text-white">Magic</h1>
                    <h1 class="text-mob text-white">{{ $percent['Magic'] }}%</h1>
                </div>
            </div>

            {{-- AI --}}
            <div class="card card-rounded my-5 mx-3">
                <img class="w-100" src="{{ asset('image/progress/ai' . $img['AI'] . '.png') }}">
                <div class="d-flex justify-content-evenly py-4" style="background-color: rgb(0, 0, 120)">
                    <h1 class="text-mob text-white">AI</h1>
                    <h1 class="text-mob text-white">{{ $percent['AI'] }}%</h1>
                </div>
            </div>

            {{-- Real Life --}}
            <div class="card card-rounded my-5 mx-3 reveal">
                <img class="w-100" src="{{ asset('image/progress/rl' . $img['Real Life'] . '.png') }}" alt="">
                <div class="d-flex justify-content-evenly py-4" style="background-color: rgb(90, 0, 0)">
                    <h1 class="text-mob text-white">Real Life</h1>
                    <h1 class="text-mob text-white">{{ $percent['Real Life'] }}%</h1>
                </div>
            </div>

            {{-- Fairy --}}
            <div class="card card-rounded my-5 mx-3 reveal">
                <img class="w-100" src="{{ asset('image/progress/fairy' . $img['Fairy'] . '.png') }}" alt="">
                <div class="d-flex justify-content-evenly py-4" style="background-color: rgb(1, 96, 1)">
                    <h1 class="text-mob text-white">Fairy</h1>
                    <h1 class="text-mob text-white">{{ $percent['Fairy'] }}%</h1>
                </div>
            </div>

            {{-- Space --}}
            <div class="card card-rounded my-5 mx-3 reveal">
                <img class="w-100" src="{{ asset('image/progress/space' . $img['Space'] . '.png') }}" alt="">
                <div class="d-flex justify-content-evenly py-4" style="background-color: midnightblue">
                    <h1 class="text-mob text-white">Space</h1>
                    <h1 class="text-mob text-white">{{ $percent['Space'] }}%</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        $(document).ready(function() {
            window.addEventListener("scroll", reveal);
        });
    </script>

</body>

</html>
