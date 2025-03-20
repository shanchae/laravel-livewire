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
            <div wire:key='{{ $entry->id }}' wire:transition>
                <h2>{{ $entry->bird_count }}</h2>
                <p>{{ $entry->notes }}</p>
                <button wire:click='delete({{ $entry->id }})'>Delete</button>
            </div>
        @endforeach
    </div>

</div>
