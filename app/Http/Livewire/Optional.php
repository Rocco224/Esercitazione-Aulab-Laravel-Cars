<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Optional extends Component
{
    public $car;
    public $price;
    public $optionals;

    public $optionalId = [];

    public function optionalsPrice()
    {   
        $total = 0;

        foreach ($this->optionalId as $id) {
            $optional = \App\Models\Extra::findOrFail($id);

            $total += $optional->price;
        };

        return $total;
    }

    public function render()
    {
        return view('livewire.optional');
    }
}
