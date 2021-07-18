<?php

namespace App\Http\Controllers;

use App\Models\pdt;
use App\Models\User;
use App\Models\warta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.index');
    }

    public function user()
    {
        $table = User::where('role', '!=', 'superadmin')->get();
        return view('pages.admin.user.index')->with(['user' => $table]);
    }

    public function addUser()
    {
        return view('pages.admin.user.add');
    }

    public function add(Request $r)
    {
        $user   = new User;

        $user->username = $r->request->get('username');
        $user->role = 'admin';
        $user->password = Hash::make($r->request->get('password'));
        $user->save();

        return redirect('/admin/user');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.user.edit')->with(['user' => $user]);
    }

    public function reset($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.user.reset')->with(['user' => $user]);
    }

    public function resetPassword(Request $r)
    {

        $id = $r->request->get('id');
        $user = User::findOrFail($id);
        $user->username = $r->request->get('username');
        $user->password = Hash::make($r->request->get('password'));
        $user->save();

        $table = User::where('role', '!=', 'superadmin')->get();
        return view('pages.admin.user.index')->with(['user' => $table]);
    }

    public function update(Request $r)
    {
        $id = $r->request->get('id');
        $user = User::findOrFail($id);
        $user->username = $r->request->get('username');
        $user->save();

        $table = User::where('role', '!=', 'superadmin')->get();
        return view('pages.admin.user.index')->with(['user' => $table]);
    }

    public function pdt()
    {
        $table = pdt::all();
        return view('pages.admin.pdt.index')->with(['pdt' => $table]);
    }

    public function addpdt()
    {
        return view('pages.admin.pdt.add');
    }

    public function add_pdt(Request $r)
    {
        $pdt   = new pdt;

        $pdt->nama      = $r->request->get('nama');
        $pdt->tempat    = $r->request->get('tempat');
        $pdt->tgl_lahir = $r->request->get('tgl_lahir');
        $pdt->alamat    = $r->request->get('alamat');
        $pdt->email     = $r->request->get('email');
        $pdt->no_hp     = $r->request->get('no_hp');
        $pdt->save();

        return redirect('/admin/pdt');
    }

    public function edit_pdt($id)
    {
        $pdt = pdt::findOrFail($id);
        return view('pages.admin.pdt.edit')->with(['pdt' => $pdt]);
    }

    public function update_pdt(Request $r)
    {
        $id = $r->request->get('id');

        $pdt = pdt::findOrFail($id);
        $pdt->nama      = $r->request->get('nama');
        $pdt->tempat    = $r->request->get('tempat');
        $pdt->tgl_lahir = $r->request->get('tgl_lahir');
        $pdt->alamat    = $r->request->get('alamat');
        $pdt->email     = $r->request->get('email');
        $pdt->no_hp     = $r->request->get('no_hp');
        $pdt->save();

        $table = pdt::all();
        return view('pages.admin.pdt.index')->with(['pdt' => $table]);
    }

    public function delete_pdt($id)
    {
        $delete_pdt     = pdt::destroy($id);
        return  $delete_pdt;
    }

    public function warta()
    {
        $table = warta::all();
        return view('pages.admin.warta.index')->with(['warta' => $table]);
    }

    public function addWarta()
    {
        return view('pages.admin.warta.add');
    }
}
