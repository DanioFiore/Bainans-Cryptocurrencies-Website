<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CreateArticle extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $category;
    public $temporary_images;
    public $images = [];

    protected $rules = [
        'title' => 'required | min: 3',
        'body' => 'required | min: 8',
        'category' => 'required',
        'images.*'=> 'required | image | max:3000',
        'temporary_images.*'=> 'required | image | max:3000',
    ];

    protected $messages = [
        'required' => 'The field :attribute is required',
        'min' => 'The field :attribute is too short',
        'temporary_images.required'=> 'The image is required',
        'temporary_images.*.image'=> 'File must be a image',
        'temporary_images.*.max'=> 'Max 3mb',
        'images.image'=> 'Photo must be an image',
        'images.max'=> 'Max 3mb',
    ];

    public function store()
    {
        $this->validate();

        $this->article = Category::find($this->category)->articles()->create($this->validate());
        if(count($this->images)) {
            foreach ($this->images as $image) {
                // $this->article->images()->create(['path'=>$image->store('images', 'public')]);
                $newFileName = "articles/{$this->article->id}";
                $newImage =  $this->article->images()->create(['path'=>$image->store($newFileName, 'public')]);

                dispatch(new ResizeImage($newImage->path, 400, 300));
            }

            Storage::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        // Auth::user()->articles()->save($article);

        $this->article->user()->associate(Auth::user());
        $this->article->save();

        session()->flash('message', 'Article successfully created!');
        $this->clearForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function clearForm()
    {
        $this->title = '';
        $this->body = '';
        $this->category = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function render()
    {
        return view('livewire.create-article');
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*'=>'image|max:3000|required',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
}
