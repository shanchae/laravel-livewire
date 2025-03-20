<?php

use Livewire\Volt\Component;

new class extends Component {
    //
    public string $message = 'No message yet';
    public function sendMessage()
    {
        $this->dispatch('send-message', $this->message);
        // $this->message = 'Message sent';
    }

    public function resetComponent()
    {
        $this->dispatch('resetComponent');
        $this->message = 'Has reset';
    }

}; ?>

<div>
    <h1>Let's Send an Event</h1>
    <div>
        <input type="text" wire:model.blur='message' wire:change='sendMessage'/>
        <button wire:click='sendMessage'>Send Message</button>
    </div>
    <div>
        <button wire:click='resetComponent'>Reset</button>
    </div>
    <div>
        <h2 class='text-red-500'>{{ $message }}</h2>
    </div>
</div>
