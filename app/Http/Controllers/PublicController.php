<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use WisdomDiala\Cryptocap\Facades\Cryptocap;


class PublicController extends Controller
{
    public function home() {
        // dd(Cryptocap::getAssets());
        Cryptocap::getSingleAsset('bitcoin');
        Cryptocap::getSingleAsset('ethereum');
        Cryptocap::getSingleAsset('binance-coin');
        Cryptocap::getSingleAsset('binance-usd');
        return view('welcome');
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
        $cryptos = Cryptocap::getAssets()->data;
        return view('cryptocurrencies', compact('cryptos'));
    }
}
