<?php

namespace App\Http\Controllers;

use App\Models\Snack;

class PageController extends Controller
{
    public function home()
    {
        $featured = Snack::orderBy('id')->take(4)->get();

        return view('home', compact('featured'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
