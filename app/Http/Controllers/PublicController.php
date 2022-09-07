<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use WisdomDiala\Cryptocap\Facades\Cryptocap;


class PublicController extends Controller
{
    public function home() {
        // dd(Auth::user());
        // dd(Cryptocap::getAssets());
        // Cryptocap::getSingleAsset('bitcoin');
        // Cryptocap::getSingleAsset('ethereum');
        // Cryptocap::getSingleAsset('binance-coin');
        // Cryptocap::getSingleAsset('binance-usd');
        $cryptos = Cryptocap::getAssetsWithLimit(5)->data;
        $articles = Article::take(3)->get()->sortByDesc('created_at');
        return view('welcome', compact('cryptos'), compact('articles'));
    }

    public function contactUs() {
        return view('contactUs');
    }

    public function contactSubmit(Request $request) {
        // dd($request->all());
        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('text');

        $contact = compact('name', 'email', 'text');
        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('homepage'))->with('flash', 'Successfully sending Email!');
    }

    public function cryptocurrencies() {
        $cryptos = Cryptocap::getAssetsWithLimit(30)->data;
        return view('cryptocurrencies', compact('cryptos'));
    }

    public function faq() {
        return view('faq');
    }

    public function categoryShow(Category $category) {
        return view('categoryShow', compact('category'));
    }

    public function searchArticles(Request $request) {
        $articles = Article::search($request->searched)->paginate(10);

        return view('articles.index', compact('articles'));
    }

    public function setLanguage($lang) {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
 