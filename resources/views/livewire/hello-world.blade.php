<div>
    @foreach($contacts as $contact)
        <div>
            @livewire('say-hi', ['contact' => $contact], key($contact->id))
            <button wire:click="removeContact('{{$contact->name}}')">Remove Contact</button>
        </div>
    @endforeach

    <hr>

    <button wire:click="$refresh">Refresh</button>
    {{now()}}
</div>
