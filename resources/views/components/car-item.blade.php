{{-- <div class="card col">
    <img class="card-img-top" src="{{ $car->image }}" alt="Fiat 500 car">
        <div class="card-body">
            <h5 class="card-title">{{ $car->name }}</h5>
            <p class="card-text">{{ $car->price }}</p>
            <a href="/car/{{ $car->id }}" class="btn btn-primary">View more</a>
        </div>
</div>     --}}


<div class="col">
    <div class="card shadow-sm">
      {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
      <img class="bd-placeholder-img card-img-top" src="{{ $car->image }}" alt="Fiat 500 car">

      <div class="card-body">
        <h3 class="card-text">{{ $car->name }}</h3>
        {{-- <p class="card-text">{{ $car->description }}</p> --}}
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/car/{{ $car->id }}" class="btn btn-sm btn-outline-secondary">View more</a>
          </div>
          <p class="card-text">Price: {{ $car->price }}$</p>
          {{-- <small class="text-muted">9 mins</small> --}}
        </div>
      </div>
    </div>
  </div>