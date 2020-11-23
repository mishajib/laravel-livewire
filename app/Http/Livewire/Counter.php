<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;

    public $step;

    public function mount()
    {
        $this->count = 0;
        $this->step  = 1;
    }

    public function increment($step)
    {
        $this->count += $step;
    }

    public function decrement()
    {
        if ($this->count > 0) {
            $this->count -= $this->step;
        } else {
            $this->alert('error', 'Value must be greater than zero!');
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
