<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function writePage() {
        return view('writer.writePage');
    }
}
