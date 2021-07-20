<?php

namespace App\Http\Controllers;

use App\Models\pdt;
use Illuminate\Http\Request;

class PendetaController extends Controller
{
    public function index()
    {
        $table = pdt::all();
        return view('pages.landing-page.pdt')->with(['pdt' => $table]);
    }
}
