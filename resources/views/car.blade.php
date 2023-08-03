<x-layout>

    <div class="container mt-3">
        <div class="row">

            <livewire:car-card :car="$car">

            <livewire:optional :car="$car" :price="$car->price" :optionals="$optionals">

        </div>
    </div>

</x-layout>