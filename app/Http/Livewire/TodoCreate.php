<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoCreate extends Component
{
    public $task;

    public function updated($task)
    {
        $this->validateOnly($task, [
            'task' => 'required|string|min:3'
        ]);
    }

    public function render()
    {
        return view('livewire.todo-create');
    }

    public function submit()
    {
        $validateData = $this->validate([
                                            'task' => 'required|string|min:3',
                                        ]);

        Todo::create($validateData);
        $this->reset();
        session()->flash('success', 'Todo added successfully');
        return redirect()->to('/todos');
    }
}
