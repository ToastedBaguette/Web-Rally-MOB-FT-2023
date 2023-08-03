<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="refresh" content="5"> --}}
    <title>Penpos Rally MOB FT 2023</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            background-color: #120238;
            height: 100%;
        }

        .card-body {
            background-color: #faf8fa;
        }

        th,
        td,
        tr {
            font-size: 18px;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-row justify-content-center align-items-center h-100">
        <div class="card w-100 mx-5">
            <div class="card-header text-center">
                <h1 class="text-mob" style="font-weight: bolder;">Status Pos</h1>
            </div>
            <div class="card-body">
                <div class="card my-3">
                    <div class="row d-flex justify-content-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" width="30%">Nama Pos</th>
                                    <th scope="col" class="text-center">Lokasi</th>
                                    <th scope="col" class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pos as $temp)
                                    <tr>
                                        <td><b>{{ $temp->name }}</b></td>
                                        <td class="text-center">{{ $temp->location }}</td>
                                        @if ($temp->status == 'Kosong')
                                            <td class="text-center badge bg-success">
                                                {{ $temp->status }}
                                            </td>
                                        @elseif ($temp->status == 'Penuh')
                                            <td class="text-center badge bg-danger">
                                                {{ $temp->status }}
                                            </td>
                                        @else
                                            <td class="text-center badge bg-warning">
                                                {{ $temp->status }}
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
