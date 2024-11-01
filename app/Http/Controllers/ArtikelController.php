<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Artikel;
use Illuminate\Http\Request;

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
        $validate = $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'judul' => 'required|string|max:255',
            'konten' => 'required|string|max:255',
            'tgl_upload' => 'required|date_format:Y-m-d H:i:s',
        ]);

        dd($validate); // Tambahkan ini untuk debugging
        Artikel::create([
            'id_admin' => $validate['id_admin'],
            'judul' => $validate['judul'],
            'konten' => $validate['konten'],
            'tgl_upload' => $validate['tgl_upload'],
        ]);


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
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
