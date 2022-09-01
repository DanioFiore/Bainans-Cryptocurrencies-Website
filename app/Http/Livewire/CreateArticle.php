<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class CreateArticle extends Component
{
    public $title;
    public $body;
    public $category;

    protected $rules = [
        'title' => 'required | min: 3',
        'body' => 'required | min: 8',
        'category' => 'required',
    ];

    protected $messages = [
        'required' => 'The field :attribute is required',
        'min' => 'The field :attribute is too short',
    ];

    public function store()
    {
        $category = Category::find($this->category);
        $category->articles()->create([
            'title'=>$this->title,
            'body'=>$this->body,
        ]);
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
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
