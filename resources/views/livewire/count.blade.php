<div>
    <h1 class="text-center">{{ $counter }}</h1>
    <div>
        <input type="text" wire:model="step" class="form-control">
    </div>
    <div class="mt-5 text-center d-flex justify-content-center">
        @livewire('button', ['title' => "Decrement", 'type' => 'danger', 'action' => 'decrementEmit'])
        @livewire('button', ['title' => "Increment", 'action' => 'incrementEmit'])
    </div>
</div>
