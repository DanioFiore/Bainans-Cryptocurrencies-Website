<div>
    <h2>
        Create an Article, dear Writer.
    </h2>

    <form wire:submit.prevent="store">
        @csrf

        <div class="mb-3">
            <label class="text-warning" for="title">Title</label>
            <input wire:model="title" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="text-warning" for="body">Article body</label>
            <textarea wire:model="body" type="text" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-success">Create</button>
    </form>
</div>
