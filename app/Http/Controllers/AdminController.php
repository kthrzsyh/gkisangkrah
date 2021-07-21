<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\pdt;
use App\Models\User;
use App\Models\warta;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function add_warta(Request $r)
    {
        $warta          = new warta;

        $warta->judul   = ucwords($r->request->get('judul'));

        $warta->isi     = $r->request->get('isi');
        $warta->author  = auth()->id();

        $judul          = strtolower($r->request->get('judul')) . "-" . date('Ymd');

        $warta->slug    = str_replace(" ", "-", $judul);

        $gambar         = $r->file('gambar');
        $file           = $r->file('file');

        $gambar_         = $this->generate_picture($gambar);
        $file_           = $this->generate_picture($file);

        $image_resize    = Image::make($gambar->getRealPath());
        $image_resize->resize(300, 300);
        $image_resize->save(public_path('warta/img/' . $gambar_));

        $warta->gambar  = $gambar_;
        $warta->file    = $file_;

        // $this->uploadImage($gambar, $gambar_, 'gambar');
        $this->uploadImage($file, $file_, 'file');

        $warta->save();
        $table = warta::all();
        return view('pages.admin.warta.index')->with(['warta' => $table]);
    }

    public function generate_picture($gambar)
    {
        $extension      = $gambar->getClientOriginalExtension();
        $name           = Uuid::uuid1()->toString();
        $value          = $name . '.' . $extension;
        return $value;
    }

    public function uploadImage($field, $targetName = '', $disk = 'upload')
    {
        return Storage::disk($disk)->put($targetName, File::get($field));
    }

    public function hapus_warta($id)
    {

        $warta                 = warta::find($id);
        $file_path_gambar      = public_path() . '/warta/img/' . $warta->gambar;
        $file_path_pdf         = public_path() . '/warta/pdf/' . $warta->file;
        // dd($file_path_gambar);
        if (file_exists($file_path_gambar)) {

            unlink($file_path_gambar);
        }
        if (file_exists($file_path_pdf)) {

            unlink($file_path_pdf);
        }

        warta::destroy($id);

        return redirect()->back();
    }

    public function gallery()
    {
        $table = Gallery::all();
        return view('pages.admin.gallery.index')->with(['gallery' => $table]);
    }

    public function addGallery()
    {
        return view('pages.admin.gallery.add');
    }

    public function add_gallery(Request $r)
    {
        $gallery                = new Gallery;
        $gallery->deskripsi     = strtolower($r->request->get('deskripsi'));
        $gambar                 = $r->file('gambar');
        $gambar_                = $this->generate_picture($gambar);

        $image_resize           = Image::make($gambar->getRealPath());
        $image_resize->resize(300, 300);
        $image_resize->save(public_path('gallery/' . $gambar_));

        $gallery->gambar        = $gambar_;

        $gallery->save();
        $table = Gallery::all();
        return view('pages.admin.gallery.index')->with(['gallery' => $table]);
    }
}
