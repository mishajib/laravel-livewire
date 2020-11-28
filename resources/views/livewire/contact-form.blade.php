<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Contact Form
        </h3>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" wire:model="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Enter email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" cols="30" rows="10" wire:model="message" class="form-control @error('message') is-invalid @enderror"
                          placeholder="Enter message"></textarea>
                @error('message')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>
