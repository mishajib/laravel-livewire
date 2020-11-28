<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.todo-index')->with([
                                                     'todos' => Todo::paginate(10)
                                                 ]);
    }

    public function delete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        session()->flash('success', 'Task deleted successfully');
    }
}
