<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ArticleControler extends Controller
{
    public function show($n): View
    {
        return view('article')->with('numero', $n);
    }
}
