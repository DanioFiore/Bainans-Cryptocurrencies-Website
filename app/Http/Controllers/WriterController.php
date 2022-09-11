<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeWriter;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class WriterController extends Controller
{
    public function writePage() {
        return view('writer.writePage');
    }

    public function workWithUs() {
        return view('workWithUs');
    }

    public function becomeWriter() {
        Mail::to('admin@bainans.com')->send(new BecomeWriter(Auth::user()));
        return redirect()->back()->with('message', 'Your request has been send');
    }

    public function makeWriter(User $user) {
        Artisan::call('bainans:makeUserWriter', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Congratulation, the user is now a writer.');
    }

    public function modifyPage($id) {
        $article = Article::findOrFail($id);
        return view('writer.modifyPage', compact('article'));
    }

    public function delete($id) {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('profile');
    }

    
}
