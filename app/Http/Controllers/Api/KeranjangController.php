<?php

namespace App\Http\Controllers\Api;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjang = Keranjang::all();

        // Kembalikan response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data keranjang berhasil diambil',
            // 'redirect_url' => url('/keranjang'),
            'data' => $keranjang
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_customer' => 'required|exists:customer,id_customer',
            'id_produk' => 'required|exists:produk,id_produk',
            'jumlah' => 'required|numeric',
        ]);
        // $validate = $request->all();
        // dd($validate);

        try {

            // Simpan data produk ke dalam database
            $keranjang = Keranjang::create([
                'id_customer' => $validate['id_customer'],
                'id_produk' => $validate['id_produk'],
                'jumlah' => $validate['jumlah'],
            ]);

            Log::info('Berhasil menambahkan Produk ke Keranjang!:', ['keranjang' => $keranjang]);

            return response()->json([
                'success' => true,
                'message' => 'Data Produk berhasil ditambahkan ke keranjang',
                'data' => $keranjang
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan produk:', ['error' => $e->getMessage()]);
            return response()->json([

                'Success ?' => false,
                'message' => 'Terjadi kesalahan saat menyimpan produk',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_keranjang)
    {
        $validate = $request->validate([
            'id_customer' => 'required|exists:customer,id_customer',
            'id_produk' => 'required|exists:produk,id_produk',
            'jumlah' => 'required|numeric',
        ]);

        // $validate = $request->all();
        // dd($validate);

        $keranjang = Keranjang::findOrFail($id_keranjang);

        // $keranjang->update($validatedData);
        $keranjang->update([
            'id_customer' => $request->id_customer,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
        ]);

        // return redirect('/keranjang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_keranjang)
    {
        $keranjang = Keranjang::find($id_keranjang);
        if (!$keranjang) {
            return redirect()->back()->with('error', 'ID tidak ditemukan');
        }

        $keranjang->delete();

        // return redirect()->back()->with('success', 'Produk berhasil dihapus');
        return response()->json([
            'success' => true,
            'message' => 'Data keranjang berhasil dihapus',
            'data' => $keranjang
        ], 201);
        // return redirect('/keranjang');
    }
}
