<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col">

                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <legend>Aggiungi auto</legend>

                    <div class="mb-3">
                        <label for="brand_id" class="form-label">Marca</label>
                        <select id="brand_id" name="brand_id" class="form-select" value="{{ old('brand_id') }}">
                            @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand_id') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Modello</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{ old('model') }}">
                        @error('model') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input class="form-control" type="file" name="image" id="image">
                        @error('image') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="engine" class="form-label">Motore</label>
                        <select id="engine" name="engine" class="form-select" value="{{ old('engine') }}">
                            <option value="Benzina">Benzina</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Elettrico">Elettrico</option>
                        </select>
                        @error('engine') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}">
                    </div>
                    @error('price') <span class="small text-danger">{{ $message }}</span> @enderror
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>