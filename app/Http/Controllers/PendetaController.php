<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendetaController extends Controller
{
    public function index()
    {
        return view('pages.landing-page.pdt');
    }
}
