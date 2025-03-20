<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        <nav>
            <a href="/counter" wire:navigate>Counter</a>
            <a href="/bird" wire:navigate>Bird Form</a>
        </nav>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
