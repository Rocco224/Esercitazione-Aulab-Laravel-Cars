<div class="col-8 mx-auto my-3">
    <form action="{{ route('order', $car) }}" method="POST">
        @csrf
        <table class="table border shadow">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Optional</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($optionals as $optional)
                <tr>
                    <th scope="row">{{ $optional->id }}</th>
                    <td>{{ $optional->name }}</td>
                    <td>{{ \App\Custom\Currency::formatEuro($optional->price) }}</td>
                    <td>
                        <input wire:model="optionalId" class="form-check-input" type="checkbox" name="optionals[]" value="{{ $optional->id }}" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-5 p-3 bg-white shadow d-flex justify-content-between">
            <p class="m-0 fs-5">
                <span class="fs-3 fw-semibold">Totale:</span>
                {{\App\Custom\Currency::formatEuro($price += $this->optionalsPrice())}}
            </p>
            <button type="submit" class="btn btn-lg btn-outline-success">
                <i class="bi bi-cash-coin"></i>
            </button>
        </div>
    </form>
</div>