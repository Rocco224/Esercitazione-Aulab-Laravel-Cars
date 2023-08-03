<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col">

                <form action="{{ route('cars.update', $car) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <legend>Modifica auto</legend>

                        <div class="mb-3">
                            <label for="brand_id" class="form-label">Marca</label>
                            <select id="brand_id" name="brand_id" class="form-select" value="{{ old('brand_id', $car->brand_id) }}">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="model" class="form-label">Modello</label>
                            <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $car->model) }}">
                        </div>
                        <div class="mb-3">
                            <label for="engine" class="form-label">Motore</label>
                            <input type="text" name="engine" id="engine" class="form-control" value="{{ old('engine', $car->engine) }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $car->price) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Modifica</button>
                
                    </form>

            </div>
        </div>
    </div>

</x-layout>