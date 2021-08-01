<?php

namespace App\Http\Controllers;

use App\Models\warta;
use Illuminate\Http\Request;

class WartaController extends Controller
{
    public function index(Request $r)
    {
        $a  = $r->get('q') ?? '';
        $b  = $r->get('offset') ?? 0;

        // dd($a);
        $table = warta::with('penulis')->where('isi', 'like', '%' . $a . '%')->orderBy('created_at', 'desc')->offset($b)
            ->limit(2)->get();
        $hitungTable    = warta::with('penulis')->where('isi', 'like', '%' . $a . '%')->get();
        // dd($hitungTable);
        $total = count($hitungTable) / 2;
        // dd($table);
        // if (count($table) == 0) {
        //     $table = null;
        // }
        // dd($table);
        return view('pages.landing-page.post')->with(['warta' => $table, 'total' => $total, 'ambilNama' => $a]);
    }
}
