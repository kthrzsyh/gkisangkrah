<?php

namespace App\Http\Controllers;

use App\Models\warta;
use Illuminate\Http\Request;

class WartaController extends Controller
{
    public function index()
    {
        $table = warta::all();
        return view('pages.landing-page.post')->with(['warta' => $table]);
    }
}
