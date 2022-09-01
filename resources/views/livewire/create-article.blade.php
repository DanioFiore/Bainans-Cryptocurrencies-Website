<div>
    <h2>
        Create an Article, dear Writer.
    </h2>

    {{-- flash session for article created start --}}
    @if(session()->has('message'))
        <div class="flex flex-row justify-center my-2 alert alert-success">
            {{session('message')}}
        </div>
    @endif
    {{-- flash session for article created end --}}

    {{-- form start --}}
    <form wire:submit.prevent="store">
        @csrf
        {{-- input title start --}}
        <div class="mb-3">
            <label class="text-warning" for="title">Title</label>
            <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
            <div class="text-danger">
                @error('title')
                    {{$message}}
                @enderror
            </div>
        </div>
        {{-- input title end --}}

        {{-- input body start --}}
        <div class="mb-3">
            <label class="text-warning" for="body">Article body</label>
            <textarea wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror"></textarea>
            <div class="text-danger">
                @error('body')
                    {{$message}}
                @enderror
            </div>
        </div>
        {{-- input body end --}}

        {{-- select category start --}}
        <div class="mb-3">
            <label class="text-warning" for="category">Category</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">Choose category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        {{-- select category end --}}

        {{-- button --}}
        <button type="submit" class="btn btn-outline-success">Create</button>
    </form>
    {{-- form end --}}
</div>
