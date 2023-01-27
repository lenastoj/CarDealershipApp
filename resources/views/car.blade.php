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

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="col">
                <div class="card shadow-sm">
                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                <img class="bd-placeholder-img card-img-top" src="{{ $car->image }}" alt="Fiat 500 car" style="width:80%;margin:0 auto;">

                <div class="card-body">
                    <h3 class="card-text">{{ $car->name }}</h3>
                    <p class="card-text">{{ $car->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="/cars" class="btn btn-sm btn-outline-secondary">All cars</a>
                    </div>
                    <p class="card-text">Price: {{ $car->price }}$</p>
                    {{-- <small class="text-muted">9 mins</small> --}}
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
  
@include('components.footer')


</body>