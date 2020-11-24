<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Childcomponent extends Component
{
    public $count;

    protected $listeners = [
        'incrementEmit' => 'increment',
        'decrementEmit' => 'decrement',
    ];

    public function increment($step = 1)
    {
        $this->count += $step;
    }

    public function decrement($step = 1)
    {
        $this->count -= $step;
    }

    public function mount()
    {
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.childcomponent');
    }
}
