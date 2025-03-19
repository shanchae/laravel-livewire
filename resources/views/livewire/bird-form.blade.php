<?php

use Livewire\Volt\Component;
use App\Models\Entry;
use Livewire\Volt\Attributes\Validate;

new class extends Component {
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

}; ?>

<div>
    <form wire:submit.prevent='submit'>
        <input type='number' wire:model='bird_count' placeholder='Enter bird count' />
        <textarea wire:model='notes' placeholder='Enter notes about the bird count'></textarea>
        </textarea>
        <button>Add a New Bird Count Entry</button>
    </form>

    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div>
        @foreach($entries as $entry)
            <div>
                <h2>{{ $entry->bird_count }}</h2>
                <p>{{ $entry->notes }}</p>
            </div>
        @endforeach
    </div>

</div>
