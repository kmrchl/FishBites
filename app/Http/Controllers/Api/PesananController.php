<?php

namespace App\Http\Controllers\Api;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::all();

        // Kembalikan response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Pesanan berhasil diambil',
            'redirect_url' => url('/produkhome'),
            'data' => $pesanan
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_produk' => 'required|exists:produk,id_produk',
            'id_customer' => 'required|exists:customer,id_customer',
            'jumlah' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required|string',
        ]);
        // $validate = $request->all();
        // dd($validate);

        try {

            // Upload gambar ke folder 'public/gambar_produk'
            $path = $request->file('bukti')->store('bukti', 'public');

            // Simpan data produk ke dalam database
            $ulasan = Pesanan::create([
                'id_produk' => $validate['id_produk'],
                'id_customer' => $validate['id_customer'],
                'jumlah' => $validate['jumlah'],
                'total_harga' => $validate['total_harga'],
                'metode_pembayaran' => $validate['metode_pembayaran'],
                'bukti' => $path,
                'status' => $validate['status'],
            ]);

            Log::info('Pesanan berhasil diunggah:', ['ulasan' => $ulasan]);

            return response()->json([
                'success' => true,
                'message' => 'Data Pesanan berhasil diunggah',
                'data' => $ulasan
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan ulasan:', ['error' => $e->getMessage()]);
            return response()->json([

                'Success ?' => false,
                'message' => 'Terjadi kesalahan saat menyimpan ulasan',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
