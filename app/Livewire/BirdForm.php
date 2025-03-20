<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;
use Livewire\Attributes\Validate;

class BirdForm extends Component {
    #[Validate('required|integer|min:1')]
    public int $bird_count;
    #[Validate('required|string|max:255')]
    public string $notes;

    public function submit() {

        $this->validate();

        Entry::create($this->pull());

        $this->reset();
    }

    public function render(): mixed {
        return view('livewire.bird-form',
            [
                'entries' => Entry::all(),
            ]
        );
    }

    public function delete($id) {
        Entry::find($id)->delete();
    }

}; ?>
