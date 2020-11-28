<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Todo List
                <a href="{{ route('todos.create') }}" class="btn btn-dark float-right">Add New Item</a>
            </h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($todos as $key => $todo)
                    <tr>
                        <th scope="row">{{ $todos->firstItem() + $key }}</th>
                        <td>{{ $todo->task }}</td>
                        <td>
                            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-primary">Edit</a>
                            <button wire:click.prevent="delete({{ $todo->id }})" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%" class="text-center text-danger">No data found!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $todos->links() }}
        </div>
    </div>
</div>
