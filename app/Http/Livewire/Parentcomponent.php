<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Parentcomponent extends Component
{
    public $step;

    public function mount()
    {
        $this->step = 1;
    }

    public function increment()
    {
        $this->emit('incrementEmit', $this->step);
    }

    public function decrement()
    {
        $this->emit('decrementEmit', $this->step);
    }

    public function render()
    {
        return view('livewire.parentcomponent');
    }
}
