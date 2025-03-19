<?php

use Livewire\Volt\Component;
use Livewire\Volt\Attributes\On;

new class extends Component {
    //
    public string $message;

    #[On('messageSent')]
    public function displayMessage()
    {
        $this->message = 'Hello from the other component';
    }

    #[On('resetComponent')]
    public function resetComponent()
    {
        $this->reset();
    }
}; ?>

<div>
    <h1>Receive Event</h1>
    <br>
    <br>
    <h2>{{ $message }}</h2>
</div>
