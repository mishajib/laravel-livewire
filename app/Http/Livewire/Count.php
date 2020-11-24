<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Count extends Component
{
    public $counter;
    public $step;

    protected $listeners = [
        'incrementEmit' => 'increment',
        'decrementEmit' => 'decrement',
    ];

    public function mount()
    {
        $this->counter = 0;
        $this->step    = 1;
    }

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        if ($this->counter > 0) {
            $this->counter--;
        } else {
            $this->alert('error', 'Value must be greater than zero!');
        }
    }

    public function render()
    {
        return view('livewire.count');
    }
}
