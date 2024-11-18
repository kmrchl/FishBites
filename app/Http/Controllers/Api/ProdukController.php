<?php

namespace App\Http\Controllers\Api;

use Execption;
use App\Models\Admin;
use App\Models\Produk;
use App\Models\Produsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Exception;

class ProdukController extends Controller

/**
 * Display a listing of the resource.
 */
{
    public function index()
    {
        $products = Produk::all();

        // Kembalikan response JSON
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Data produk berhasil diambil',
        //     'redirect_url' => url('/produkhome'),
        //     'data' => $products
        // ], 201);

        return response()->json($products);
    }

    public function create()
    {
        $producers = Produsen::all();
        $admins = Admin::all();
        $kategori = Kategori::all();

        return view('produk.add', compact('producers', 'admins', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Log::info('Request data:', $request->all());

        // Lakukan validasi
        $validate = $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'id_produsen' => 'required|exists:produsen,id_produsen',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'nama_produk' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer'
        ]);

        if (empty($validate['id_kategori'])) {
            return response()->json([
                'success' => false,
                'message' => 'Kolom id_kategori wajib diisi.',
            ], 400);
        }
        // $validate = $request->all();
        // dd($validate);

        try {
            // Upload gambar ke folder 'public/gambar_produk'
            $path = $request->file('gambar')->store('images', 'public');

            // Simpan data produk ke dalam database
            $produk = Produk::create([
                'id_admin' => $validate['id_admin'],
                'id_produsen' => $validate['id_produsen'],
                'id_kategori' => $validate['id_kategori'],
                'nama_produk' => $validate['nama_produk'],
                'gambar' => $path,
                'deskripsi' => $validate['deskripsi'],
                'harga' => $validate['harga'],
                'stok' => $validate['stok'],
            ]);

            Log::info('Produk berhasil disimpan:', ['produk' => $produk]);

            return response()->json([
                'success' => true,
                'message' => 'Data produk berhasil disimpan',
                'data' => $produk
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan produk:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan produk',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // return redirect('/');


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $show = Produk::all();

        return view('produk.index', ['show' => $show]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function edit($id_produk)
    {
        $produk = Produk::find($id_produk);
        $admins = Admin::all();
        $produsens = Produsen::all();
        $kategori = Kategori::all();

        if ($produk) {
            // Kembalikan view dengan data produk
            return view('produk.edit', compact('produk', 'admins', 'produsens', 'kategori'));
        }

        return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
    }

    public function update(Request $request, $id_produk)
    {
        $validate = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'gambar' => 'required|image',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'id_produsen' => 'required|exists:produsen,id_produsen',
            'id_admin' => 'required|exists:admin,id_admin',
            'id_kategori' => 'required|exists:kategori,id_kategori',
        ]);

        // $validate = $request->all();
        // dd($validate);

        $produk = Produk::findOrFail($id_produk);
        if ($request->hasFile('gambar')) {
            // Ambil file gambar
            $gambar = $request->file('gambar');

            // Tentukan nama file dan simpan di folder 'images' dalam 'public' disk
            $fileName = time() . '.' . $gambar->getClientOriginalExtension();
            $path = $gambar->storeAs('images', $fileName, 'public'); // Menyimpan file di storage/app/public/images/

            // Simpan path gambar relatif di database (tanpa 'storage/')
            $produk->gambar = 'images/' . $fileName;
        }
        // $produk->update($validatedData);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'nama_produk' => $request->nama_produk,
            'gambar' => $request->gambar,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'id_produsen' => $request->id_produsen,
            'id_admin' => $request->id_admin,
            'id_kategori' => $request->id_kategori,
        ]);

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_produk)
    {
        $produk = Produk::find($id_produk);

        if ($produk) {
            $produk->delete(); // Hapus data produk
            return response()->json(['message' => 'Produk berhasil dihapus.'], 200);
        }

        return response()->json(['message' => 'Produk tidak ditemukan.'], 404);
    }
}
