<?php

namespace App\Http\Controllers\Api;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;

class CompanyController extends Controller
{
    public function index(Request $request)
    {

        $artikel = Artikel::all();


        // Jika tidak, kembalikan ke view dengan data produk
        return view('profile.index', ['artikel' => $artikel]);
    }


    public function ikantawar($id_kategori)
    {
        $produk = Produk::where('id_kategori', $id_kategori)->get();

        if ($produk->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada produk untuk kategori ini',
            ], 404);
        }

        return view('profile.ikantawar', [
            'produk' => $produk
        ]);

        return response()->json([
            'success' => true,
            'data' => $produk,
        ], 200);
    }

    public function ikantawardetail()
    {
        return view('profile.ikantawar-detail');
    }

    public function ikanlaut($id_kategori)
    {
        $produk = Produk::where('id_kategori', $id_kategori)->get();

        if ($produk->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada produk untuk kategori ini',
            ], 404);
        }

        return view('profile.ikanlaut', [
            'produk' => $produk
        ]);

        return response()->json([
            'success' => true,
            'data' => $produk,
        ], 200);
    }

    public function ikanlautdetail()
    {
        return view('profile.ikanlaut-detail');
    }

    public function bibitpakan($id_kategori)
    {
        $produk = Produk::where('id_kategori', $id_kategori)->get();

        if ($produk->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada produk untuk kategori ini',
            ], 404);
        }

        return view('profile.bibitpakan', [
            'produk' => $produk
        ]);

        return response()->json([
            'success' => true,
            'data' => $produk,
        ], 200);
    }

    public function bibitpakandetail()
    {
        return view('profile.bibitpakan-detail');
    }

    public function blog()
    {
        return view('profile.blog');
    }

    public function blogDetail()  // Ganti dari 'blog-detail' menjadi 'blogDetail'
    {
        return view('profile.blog-detail');
    }
}
