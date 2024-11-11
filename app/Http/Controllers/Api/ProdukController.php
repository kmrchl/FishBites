<?php

namespace App\Http\Controllers\Api;

use Execption;
use App\Models\Admin;
use App\Models\Produk;
use App\Models\Produsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Exception;

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

        // Log::info('Store function called'); // Menulis ke log




        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'id_produsen' => 'required|exists:produsen,id_produsen',
            'nama_produk' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $path = $request->file('gambar')->store('produk', 'public');


        $produk = new Produk();
        $produk->id_produk = $request->id_produk;
        $produk->id_produsen = $request->id_produsen;
        $produk->nama_produk = $request->nama_produk;
        $produk->gambar = $path;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->save();



        return view('/');
        // $add = Produk::create([
        //     'id_admin' => $request['id_admin'],
        //     'id_produsen' => $request['id_produsen'],
        //     'nama_produk' => $request['nama_produk'],
        //     'gambar' => $path,
        //     'deskripsi' => $request['deskripsi'],
        //     'harga' => $request['harga'],
        //     'stok' => $request['stok'],
        // ]);
    }

    // return redirect('/');


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
