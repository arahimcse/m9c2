<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home');
    }

    public function about(Request $request)
    {
        return view('pages.about');
    }

    public function foot()
    {
        return view('pages.foot');
    }

    public function contact()
    {
        return view('pages.contract');
    }
}
