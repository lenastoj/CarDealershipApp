<div class="col">
  <div class="card shadow-sm">
    {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
    <img class="bd-placeholder-img card-img-top" src="{{ $part->image }}" alt="Fiat 500 car">

    <div class="card-body">
      <h3 class="card-text">{{ $part->name }}</h3>
      {{-- <p class="card-text">{{ $car->description }}</p> --}}
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="/part/{{ $part->id }}" class="btn btn-sm btn-outline-secondary">View more</a>
        </div>
        <p class="card-text">For car: {{ $part->car_name }}</p>
        {{-- <small class="text-muted">9 mins</small> --}}
      </div>
    </div>
  </div>
</div>