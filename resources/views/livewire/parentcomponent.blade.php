<div>
    <div>
        <input type="text" wire:model="step" class="form-control">
    </div>
    <div class="mt-5 text-center">
        <button class="btn btn-danger" wire:click="decrement">-</button>
        <button class="btn btn-primary" wire:click="increment">+</button>
        {{-- <button class="btn btn-danger" wire:click="$emit('decrementEmit', {{ $step }})">-</button>
        <button class="btn btn-primary" wire:click="$emit('incrementEmit', {{ $step }})">+</button> --}}
    </div>
    @livewire('childcomponent')
</div>
