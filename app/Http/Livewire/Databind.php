<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Databind extends Component
{
    public $message1 = 'Placeholder1';
    public $message2 = 'Placeholder2';
    
    public function render()
    {
        return view('livewire.databind');
    }
}
