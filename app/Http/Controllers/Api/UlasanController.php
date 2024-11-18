<?php

namespace App\Http\Controllers\Api;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ulasan = Ulasan::all();

        // Kembalikan response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data ulasan berhasil diambil',
            'redirect_url' => url('/produkhome'),
            'data' => $ulasan
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
            'komentar' => 'required|string|max:255'
        ]);
        // $validate = $request->all();
        // dd($validate);

        try {

            // Simpan data produk ke dalam database
            $ulasan = Ulasan::create([
                'id_customer' => $validate['id_customer'],
                'id_produk' => $validate['id_produk'],
                'komentar' => $validate['komentar'],
            ]);

            Log::info('Ulasan berhasil diunggah:', ['ulasan' => $ulasan]);

            return response()->json([
                'success' => true,
                'message' => 'Data ulasan berhasil diunggah',
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
