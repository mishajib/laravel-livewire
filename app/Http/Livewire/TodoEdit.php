<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoEdit extends Component
{
    public $task;
    public $ids;
    public $todo;

    public function mount($todo)
    {
        $this->task = $todo->task;
        $this->ids  = $todo->id;
        $this->todo = $todo;
    }

    public function render()
    {
        return view('livewire.todo-edit');
    }

    public function updated($task)
    {
        $this->validateOnly($task, [
            'task' => 'required|string|min:3'
        ]);
    }

    public function update($ids)
    {
        $validateData = $this->validate([
                                            'task' => 'required|string|min:3',
                                        ]);
        $todo         = Todo::findOrFail($ids);
        $todo->update($validateData);
        session()->flash('success', 'Todo added successfully');
        return redirect()->to('/todos');
    }


}
