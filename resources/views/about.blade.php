<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/newstyle.css') }}">
    <link rel="stylesheet" href="{{ url('/style.css') }}">

    <title>Car Dealership</title>
</head>
<body>

    @include('components.header')

    {{-- <h1>About</h1> --}}
    <section class="py-5 text-center container" style="background-color: rgb(239, 238, 238)">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">About Car Dealership</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p class="lead text-muted" style="font-weight: bold;">Meet our team:</p>
            <ul style="  list-style-type: none;">
                <li class="lead text-muted" style="">Pera Peric</li>
                <li class="lead text-muted">Pera Peric</li>
                <li class="lead text-muted">Pera Peric</li>
                <li class="lead text-muted">Pera Peric</li>
            </ul>
            {{-- <p>
              <a href="#" class="btn btn-primary my-2">Main call to action</a>
              <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p> --}}
          </div>
        </div>
      </section>

    @include('components.footer')

</body>
