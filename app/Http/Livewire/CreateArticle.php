<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateArticle extends Component
{
    public $title;
    public $body;

    public function store()
    {
        Article::create([
            'title'=>$this->title,
            'body'=>$this->body,
        ]);
    }
    public function render()
    {
        return view('livewire.create-article');
    }
}
