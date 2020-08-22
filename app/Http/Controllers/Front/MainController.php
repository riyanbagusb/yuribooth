<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return(view('front.main'));
    }

    public function katalog()
    {
        return(view('front.menu.katalog'));
    }

    public function produk()
    {
        return(view('front.menu.produk'));
    }

    public function detail_produk()
    {
        return(view('front.menu.detail_produk'));
    }
}
