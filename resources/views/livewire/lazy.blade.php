<?php

use Livewire\Volt\Component;

new class extends Component {
    //
    public function mount() 
    {
        sleep(3);
    }

    public function placeholder() {
        return <<< 'HTML'
            <div>
                <svg class="mr-3 size-5 animate-spin ..." viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A8.001 8.001 0 0112 4.472v3.09c-2.832.546-5 2.967-5 5.729h3zm2 5.291c1.34 2.284 3.724 4 6.5 4v3c-3.584 0-6.75-2.29-7.875-5.709h1.375z"></path>
                </svg>
                <p>Loading critical information...</p>
            </div>
        HTML;
    }
}; ?>

<div>
    Hello There World
    {{ now() }}
</div>
