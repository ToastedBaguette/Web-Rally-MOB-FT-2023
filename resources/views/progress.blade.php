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
    {{-- <script src="https://kit.fontawesome.com/55a9c97135.js" crossorigin="anonymous"></script> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progress.css') }}">
</head>


<body>
    <div class="container text-center pb-5 mb-5 pb-md-0 mb-md-0">
        <div class="row my-md-3 justify-content-center">
            <div class="col-md-3 my-3">
                {{-- MAGIC --}}
                <div class="card card-rounded mx-3 mx-md-0">
                    <img class="h-75" src="{{ asset('image/progress/magic' . $img['Magic'] . '.png') }}">
                    <div class="d-flex justify-content-evenly pt-3" style="background-color: darkred">
                        <h3 class="text-mob text-white">Magic</h3>
                        <h3 class="text-mob text-white">{{ $percent['Magic'] }}%</h3>
                    </div>
                    <div class="d-flex justify-content-center pb-2" style="background-color: darkred">
                        <h5 class="text-white">Problem Solving</h5>
                    </div>
                </div>

            </div>

            <div class="col-md-3 my-3">
                {{-- AI --}}
                <div class="card card-rounded mx-3 mx-md-0">
                    <img class="h-75" src="{{ asset('image/progress/ai' . $img['AI'] . '.png') }}">
                    <div class="d-flex justify-content-evenly pt-3" style="background-color: rgb(139, 67, 0)">
                        <h3 class="text-mob text-white">AI</h3>
                        <h3 class="text-mob text-white">{{ $percent['AI'] }}%</h3>
                    </div>
                    <div class="d-flex justify-content-center pb-2" style="background-color: rgb(139, 67, 0)">
                        <h5 class="text-white">Teamwork</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                {{-- Real Life --}}
                <div class="card card-rounded mx-3 mx-md-0">
                    <img class="h-75" src="{{ asset('image/progress/rl' . $img['Real Life'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly pt-3" style="background-color: rgb(198, 205, 0)">
                        <h3 class="text-mob text-white">Real Life</h3>
                        <h3 class="text-mob text-white">{{ $percent['Real Life'] }}%</h3>
                    </div>
                    <div class="d-flex justify-content-center pb-2" style="background-color: rgb(198, 205, 0)">
                        <h5 class="text-white">Leadership</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                {{-- Fairy --}}
                <div class="card card-rounded mx-3 mx-md-0">
                    <img class="h-75" src="{{ asset('image/progress/fairy' . $img['Fairy'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly pt-3" style="background-color: rgb(1, 96, 1)">
                        <h3 class="text-mob text-white">Fairy</h3>
                        <h3 class="text-mob text-white">{{ $percent['Fairy'] }}%</h3>
                    </div>
                    <div class="d-flex justify-content-center pb-2" style="background-color: rgb(1, 96, 1)">
                        <h5 class="text-white">Kreativitas</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                {{-- Space --}}
                <div class="card card-rounded mx-3 mx-md-0">
                    <img class="h-75" src="{{ asset('image/progress/space' . $img['Space'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly pt-3" style="background-color: rgb(25, 45, 112)">
                        <h3 class="text-mob text-white">Space</h3>
                        <h3 class="text-mob text-white">{{ $percent['Space'] }}%</h3>
                    </div>
                    <div class="d-flex justify-content-center pb-2" style="background-color: rgb(25, 45, 112)">
                        <h5 class="text-white">Satu</h5>
                    </div>
                </div>
            </div>


            <div class="col-md-3 my-3">
                {{-- Sporty --}}
                <div class="card card-rounded mx-3 mx-md-0">
                    <img class="h-75" src="{{ asset('image/progress/sporty' . $img['Sporty'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly pt-3" style="background-color: indigo">
                        <h3 class="text-mob text-white">Sporty</h3>
                        <h3 class="text-mob text-white">{{ $percent['Sporty'] }}%</h3>
                    </div>
                    <div class="d-flex justify-content-center pb-2" style="background-color: indigo">
                        <h5 class="text-white">Teamwork</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                {{-- Friendship --}}
                <div class="card card-rounded mx-3 mx-md-0">
                    <img class="h-75" src="{{ asset('image/progress/bff' . $img['Friendship'] . '.png') }}"
                        alt="">
                    <div class="d-flex justify-content-evenly pt-3" style="background-color: rgb(97, 27, 133)">
                        <h3 class="text-mob text-white">Friendship</h3>
                        <h3 class="text-mob text-white">{{ $percent['Friendship'] }}%</h3>
                    </div>
                    <div class="d-flex justify-content-center pb-2" style="background-color: rgb(97, 27, 133)">
                        <h5 class="text-white">Problem Solving</h5>
                    </div>
                </div>
            </div>


            <div class="floating-container">
                <div class="floating-button" data-bs-toggle="modal" data-bs-target="#modalMap">
                    <i class="material-icons">map
                    </i>
                </div>
            </div>

            <div class="floating-container-alt">
                <a class="floating-button" href="{{ route('status') }}">
                    <i class="material-icons">info
                    </i>
                </a>
            </div>


        </div>



        <!-- Modal -->
        <div class="modal fade" id="modalMap" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="fs-5 text-mob">MAP GAMES RALLY</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="w-100" src="{{ asset('image/map.png') }}" alt="">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" aria-label="Details"
                                data-bs-toggle="modal" data-bs-target="#modalDetails">TF Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Details -->
        <div class="modal fade" id="modalDetails" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="fs-5 text-mob">TF DETAILS</h1>
                        <button type="button" class="btn-close" data-bs-target="#modalMap" data-bs-toggle="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="w-100" src="{{ asset('image/mapdetails.png') }}" alt="">
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
