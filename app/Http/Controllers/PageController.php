<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{

    public function download()
    {
        return view('pages.download');
    }
    
 public function home()
    {
        return view('pages.home');
    }

    public function ranking()
    {
        return view('pages.ranking');
    }

}