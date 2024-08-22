<div>
    {{-- The whole world belongs to you. --}}
    <input type="text" wire:model='note'/>
    <button wire:click='store'>Guardar nota</button>
    <p style="color: red;">{{ $feedback }}</p>
    <ul>
        @foreach ($notes as $note)
            <li>{{ $note->content }}
                <button wire:click='update({{$note->id}})'>Actualizar</button> 
                <button wire:click='destroy({{$note->id}})'>Borrar</button>
            </li>
        @endforeach
    </ul>
</div>
