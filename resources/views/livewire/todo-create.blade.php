<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Add New Item
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
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="task">Task</label>
                    <input type="text" class="form-control @error('task') is-invalid @enderror" wire:model="task" id="task" placeholder="Enter task">
                    @error('task')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button class="btn btn-success float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
