<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="refresh" content="5">
  <title>Penpos Rally MOB FT 2023</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/logo.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <style>
    body {
      background-color: #120238;
      height: 100%;
    }

    .card-body {
      background-color: #faf8fa;
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
        <div class="card my-5">
          <div class="card-body text-center">
            <div class="row">
              <table>
                <tr>
                  <th>Pos</th>
                  <th>Lokasi</th>
                  <th>Status</th>
                </tr>
                @foreach ($pos as $temp)
                <tr>
                  <th>{{$temp->name}}</th>
                  <th>{{$temp->location}}</th>
                  <th>{{$temp->status}}</th>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
