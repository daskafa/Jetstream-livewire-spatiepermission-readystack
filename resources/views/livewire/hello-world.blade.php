<div>
    {{-- <input type="text" wire:model.debounce.600ms="message"> --}}
    <input type="text" wire:model.lazy="message">

    <h1>{{ $message }}</h1>
</div>
