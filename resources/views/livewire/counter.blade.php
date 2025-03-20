<div>
    <h1 class='text-red-500'>{{ $name }}</h1>
    <h2>{{ $count }}</h2>
    <input type="text" wire:model.blur='name' />
    <button wire:click='increment'>
        Click me
    </button>
</div>
