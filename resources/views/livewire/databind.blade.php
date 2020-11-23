<div>
    {{-- <p><input type="text" wire:model.debound.500ms="message1"></p> --}}
    <p><input type="text" wire:model.lazy="message1" class="form-control"></p>
    <p><input type="text" wire:model.lazy="message2" class="form-control"></p>
    <p class="text-center">{{ $message1 }}</p>
    <p class="text-center">{{ $message2 }}</p>
</div>
