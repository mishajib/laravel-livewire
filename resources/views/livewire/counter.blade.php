<div>
    <div class="text-center mt-5">
        <p>
            <input type="text" wire:keydown.arrow-up="increment({{ $step }})"
                wire:keydown.arrow-down="decrement({{ $step }})" wire:model.lazy="step" class="form-control">
        </p>
        <button wire:click="decrement({{ $step }})" class="btn btn-secondary">Minus -</button>
        <button wire:click="increment({{ $step }})" class="btn btn-primary">Plus +</button>
        <h1 class="h1">{{ $count }}</h1>
    </div>
</div>
