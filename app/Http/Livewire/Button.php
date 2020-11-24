<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $title;
    public $type;
    public $action;

    public function mount($title = 'Button', $type = 'primary', $action = '')
    {
        $this->title  = $title;
        $this->type   = $type;
        $this->action = $action;
    }

    public function action()
    {
        $this->emitUp($this->action);
    }
    public function render()
    {
        return view('livewire.button');
    }
}
