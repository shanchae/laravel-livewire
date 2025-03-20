<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    //
    public string $message = 'No message yet';

    #[On('send-message')]
    public function displayMessage($newMessage)
    {
        $this->message = $newMessage;
    }

    #[On('resetComponent')]
    public function resetComponent()
    {
        $this->reset();
    }
}; ?>

<div>
    <br>
    <h1>Receive Event</h1>
    <br>
    <br>
    <h2>{{ $message }}</h2>
</div>
