<x-layout>

    <div class="container my-5">

        <div class="row">
            <div class="col mb-5">
                <div class="d-flex">
                    <h1 class="me-3">Catalogo auto</h1>
                    @auth
                    <a href="{{ route('cars.create') }}">
                        <button type="button" class="btn btn-lg btn-outline-success">
                            <i class="bi bi-plus-square"></i>
                        </button>
                    </a>
                    @endauth
                </div>
            </div>
        </div>

        <x-message />

        <div class="row">
            @foreach($cars as $car)
            <div class="col mb-4">
                <div class="card shadow h-100" style="width: 18rem;">
                    <img src="{{ Storage::url($car->image) }}" class="card-img-top h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->model }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer py-3">

                        <div class="d-flex justify-content-between flex-row-reverse">
                            <a href="{{ route('car', $car) }}">
                                <button type="button" class="btn btn-lg btn-outline-primary">
                                    <i class="bi bi-arrow-right-square"></i>
                                </button>
                            </a>
                            @auth
                            <a href="{{ route('cars.edit', $car) }}">
                                <button type="button" class="btn btn-lg btn-outline-secondary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </a>
                            <form action="{{ route('cars.destroy', $car) }}" method="POST" onsubmit="return confirm('Stai per eliminare il libro! Sei sicuro?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-lg btn-outline-danger">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                            @endauth
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>