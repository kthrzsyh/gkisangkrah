<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WartaController extends Controller
{
    public function index()
    {
        return view('pages.landing-page.warta');
    }
}
