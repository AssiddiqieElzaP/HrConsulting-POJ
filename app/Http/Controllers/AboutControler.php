<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutControler extends Controller
{
    function aboutUs()
    {
        return view('pages.about-us');
    }
}
