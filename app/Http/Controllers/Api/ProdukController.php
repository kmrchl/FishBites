<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use App\Models\Produk;
use App\Models\Produsen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produk.add');
    }

    public function create()
    {
        $producers = Produsen::all();
        $admins = Admin::all();

        return view('produk.add', compact('producers', 'admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'id_produsen' => 'required|exists:produsen,id_produsen',
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Produk::create([
            'id_admin' => $validate['id_admin'],
            'id_produsen' => $validate['id_produsen'],
            'nama_produk' => $validate['nama_produk'],
            'deskripsi' => $validate['deskripsi'],
            'harga' => $validate['harga'],
            'stok' => $validate['stok'],
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Produk::all();

        return view('home', ['show' => $show]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function edit($id_produk)
    {
        $produk = Produk::find($id_produk);
        $admins = Admin::all();
        $produsens = Produsen::all();

        if (!$produk) {
            return redirect()->back()->with('error', 'Produsen tidak ditemukan');
        }

        return view('produk.edit', compact('produk', 'admins', 'produsens')); // Mengirim data ke view edit
    }

    public function update(Request $request, $id_produk)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'id_produsen' => 'required|exists:produsen,id_produsen',
            'id_admin' => 'required|exists:admin,id_admin',
        ]);

        $produk = Produk::findOrFail($id_produk);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'id_produsen' => $request->id_produsen,
            'id_admin' => $request->id_admin,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_produk)
    {
        $produk = Produk::find($id_produk);
        if (!$produk) {
            return redirect()->back()->with('error', 'ID tidak ditemukan');
        }

        $produk->delete();

        // return redirect()->back()->with('success', 'Produsen berhasil dihapus');
        return redirect('/');
    }
}
