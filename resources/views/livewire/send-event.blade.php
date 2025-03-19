<?php

use Livewire\Volt\Component;

new class extends Component {
    //
    public function sendMessage()
    {
        $this->dispatch('messageSent');
    }

    public function resetComponent()
    {
        $this->dispatch('resetComponent');
    }

}; ?>

<div>
    <h1>Let's Send an Event</h1>
    <div>

        <button class='border' wire:click='sendMessage'>Send Message</button>
    </div>
    <div>

        <button class='border' wire:click='resetComponent'>Reset</button>
    </div>
</div>
