<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>{{ $count }}</h1>
    <button wire:click="increment">Incrementar</button>

    <input type="text" wire:model.live='username'/>  {{-- wire:model es para el databinding (birideccional), live es para que se actualice en tiempo real a medida que vamos escribiendo. Existen otros métodos como .lazy, .poll y .debounce --}}
    <br/>
    <h3>{{ $username }}</h3>
</div>
