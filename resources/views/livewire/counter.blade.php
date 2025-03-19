<?php

use Livewire\Volt\Component;

new class extends Component {
    public int $count = 0;
    public string $name = 'Shannen';
    //
    public function increment()
    {
        $this->count++;
    }

}; ?>

<div>
    <h1 class='text-red-500'>{{ $name }}</h1>
    <h2>{{ $count }}</h2>
    <input type="text" wire:model.blur='name' />
    <button wire:click='increment'>
        Click me
    </button>
</div>
