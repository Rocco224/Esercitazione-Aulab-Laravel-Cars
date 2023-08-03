<x-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                <H1>Benvenuto @auth{{ auth()->user()->name }}@endauth</H1>
                <p>Guarda le nostre auto disponibili e scegli quella giusta per te!</p>
                <a href="{{route('cars.catalog')}}">
                    <button type="button" class="btn btn-outline-primary btn-lg">
                        Concessionaria
                    </button>
                </a>
            </div>
        </div>
    </div>

</x-layout>