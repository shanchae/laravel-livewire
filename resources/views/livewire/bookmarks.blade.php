<div>
    <h1>Bookmarks</h1>
    <p>User: {{ Auth::user()->name }}</p>
    <form wire:submit='save'>
        <input type="text" wire:model='name' />
        <input type="text" wire:model='url' />
        <button type='submit'>Save</button>
    </form>

    <form wire:submit='sendNotification'>
        <button wire:click='sendNotification' type='submit'>Send Notification</button>
    </form>

    <div>
        @foreach($bookmarks as $bookmark)
            <div wire:key='{{ $bookmark->id }}'>
                <h2>{{ $bookmark->name }}</h2>
                <p>{{ $bookmark->url }}</p>
                <button wire:click='delete({{ $bookmark->id }})'>Delete</button>
            </div>
        @endforeach
    </div>
</div>
