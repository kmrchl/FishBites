<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('artikel.add', ['admins' => $admins]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'id_admin' => 'required|exists:admin,id_admin',
        //     'judul' => 'required|string|max:255',
        //     'konten' => 'required|string|max:65535',
        //     'tgl_upload' => 'required|date_format:Y-m-d H:i:s',
        // ]);

        // Artikel::create([
        //     'id_admin' => $validate['id_admin'],
        //     'judul' => $validate['judul'],
        //     'konten' => $validate['konten'],
        //     'tgl_upload' => $validate['tgl_upload'],
        // ]);

        // Log::info("Artikel berhasil disimpan.");

        $data = [
            'id_admin' => $request->input('id_admin'),
            'judul' => $request->input('judul'),
            'konten' => $request->input('konten'),
            'tgl_upload' => $request->input('tgl_upload'),
        ];

        Artikel::create($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $artikel = Artikel::all();

        return view('home', ['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function edit($id_artikel)
    {
        $artikel = Artikel::find($id_artikel);
        if (!$artikel) {
            return redirect('/')->with('error', 'Artikel tidak ditemukan.');
        }

        $admins = Admin::all();

        // Tampilkan form edit
        return view('artikel.edit', compact('artikel', 'admins'));
    }

    public function update(Request $request, $id_artikel)
    {
        $artikel = Artikel::find($id_artikel);

        // Jika artikel tidak ditemukan, Anda bisa mengarahkan kembali atau memberikan respons error
        if (!$artikel) {
            return redirect('/')->with('error', 'Artikel tidak ditemukan.');
        }

        // Ambil data dari request dan perbarui artikel
        $artikel->id_admin = $request->input('id_admin');
        $artikel->judul = $request->input('judul');
        $artikel->konten = $request->input('konten');
        $artikel->tgl_upload = $request->input('tgl_upload');

        // Simpan perubahan
        $artikel->save();

        // Redirect ke halaman utama atau halaman lain
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_artikel)
    {
        $artikel = Artikel::find($id_artikel);
        if (!$artikel) {
            return redirect()->back()->with('error', 'ID tidak ditemukan');
        }

        $artikel->delete();

        // return redirect()->back()->with('success', 'Produsen berhasil dihapus');
        return redirect('/');
    }
}
