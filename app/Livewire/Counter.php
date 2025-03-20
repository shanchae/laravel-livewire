<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component {
    public int $count = 0;
    public string $name = 'Shannen';
    //
    public function increment()
    {
        $this->count++;
    }

    public function render():mixed
    {
        return view('livewire.counter');
    }

}; ?>