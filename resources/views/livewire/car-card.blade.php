<div class="col-8 mx-auto">

    <a href="{{ route('cars.catalog') }}">
        <button type="button" class="btn btn-lg btn-outline-primary mb-3">
            <i class="bi bi-arrow-left-square"></i>
        </button>
    </a>

    <x-message />

    <div class="card shadow my-3">
        <img src="{{ Storage::url($car->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $car->model }}</h5>
            <p class="card-text"><small class="text-body-secondary">{{ $car->brand->name }}</small></p>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <span><small class="text-body-secondary">Motore: {{ $car->engine }}</small></span>
            <p class="card-text"><small class="text-body-secondary">Prezzo: {{ \App\Custom\Currency::formatEuro($car->price) }}</small></p>
        </div>
    </div>

</div>