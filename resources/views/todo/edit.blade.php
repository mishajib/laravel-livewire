@extends("livewire")

@section("content")
    @livewire('todo-edit', ['todo' => $task])
@stop
