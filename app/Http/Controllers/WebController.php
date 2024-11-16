<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WebController extends Controller
{
    public function home(): View
    {
        return view('web.home.index');
    }
}
