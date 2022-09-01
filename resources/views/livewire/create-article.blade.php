<div>
    <h2>
        Create an Article, dear Writer.
    </h2>

    @if(session()->has('message'))
        <div class="flex flex-row justify-center my-2 alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form wire:submit.prevent="store">
        @csrf

        <div class="mb-3">
            <label class="text-warning" for="title">Title</label>
            <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
            <div class="text-danger">
                @error('title')
                    {{$message}}
                @enderror
            </div>
            
        </div>

        <div class="mb-3">
            <label class="text-warning" for="body">Article body</label>
            <textarea wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror"></textarea>
            <div class="text-danger">
                @error('body')
                    {{$message}}
                @enderror
            </div>
            
        </div>

        <button type="submit" class="btn btn-outline-success">Create</button>
    </form>
</div>
