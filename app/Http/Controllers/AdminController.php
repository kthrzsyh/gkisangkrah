<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
