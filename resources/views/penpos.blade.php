<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        .card-body{
            background-color: #faf8fa;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-row justify-content-center align-items-center h-100">
        <div class="card w-50">
            <div class="card-header text-center">
                <h1 class="text-mob" style="font-weight: bolder;">MAGIC - Pos 1</h1>
                
            </div>
            <div class="card-body">
                <div class="input-section text-center">
                    <div class="team-select my-2 ">
                        <label class="text-mob" for="team" style="">Nomor Tim :</label>
                        <br>
                        <select name="team" id="team" class="form-select" required>
                            <option value="-" selected disabled>- Pilih Team -</option>
                            <option value="team1" id="team1">1</option>
                        </select>
                    </div>
                    <label class="text-mob" for="result" style="">Hasil :</label> <br>
                    <button class="btn btn-danger" id="btnFail">Fail</button>
                    <button class="btn btn-success" id="btnSuccess">Success</button>
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
