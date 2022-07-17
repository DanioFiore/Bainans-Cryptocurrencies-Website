<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
