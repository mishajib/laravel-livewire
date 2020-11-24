<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Helloworld extends Component
{
    public $count;

    public function mount(Request $request, $count = 0)
    {
        $this->count = $request->count ?? $count;
    }

    public function render()
    {
        return view('livewire.helloworld');
    }
}
