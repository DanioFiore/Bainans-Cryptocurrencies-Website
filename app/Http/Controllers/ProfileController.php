<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile() {
        return view('profile');
    }

    public function store(Request $request) {

        // dd($request->all());
        if($request->hasFile('picture')) {
            Auth::user()->profile()->create([
                'country'=>$request->input('country'),
                'city'=>$request->input('city'),
                'phone'=>$request->input('phone'),
                'picture'=>$request->file('picture')->store('public'),
            ]);
        } else {
            Auth::user()->profile()->create([
                'country'=>$request->input('country'),
                'city'=>$request->input('city'),
                'phone'=>$request->input('phone'),
            ]);
        }
        
        
        

        return redirect()->route('profile');
    }
}

