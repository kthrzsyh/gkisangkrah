<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $table = Gallery::all();
        return view('pages.landing-page.gallery')->with(['gallery' => $table]);
    }
}
