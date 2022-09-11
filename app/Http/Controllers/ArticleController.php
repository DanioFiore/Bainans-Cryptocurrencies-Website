<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function showArticle(Article $article) {
      return view('articles.show', compact('article'));
   }

   public function indexArticle() {
      $articles = Article::orderBy('created_at', 'desc')->paginate(15);
      return view('articles.index', compact('articles'));
   }
}
