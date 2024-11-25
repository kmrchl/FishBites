<?php

namespace App\Http\Controllers\Api;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();

        // return view('kategori.index', ['kategori' => $kategori]);
        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Data Kategori berhasil diambil',
                'data' => $kategori,
            ], 200);
        }
    }

    public function kategori()
    {
        $kategori = kategori::all();

        if($kategori->isEmpty()){
            return response()->json([
                'success' =>'false',
                'message' => 'Data Kategori tidak ditemukan',
                'data' => [],
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Kategori berhasil diambil',
            'data' => $kategori->map(function ($item) {
                return [
                    'id_kategori' => $item->id_kategori,
                    'kategori' => $item->kategori,
                ];
            }),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kategori' => 'required|string'
        ]);

        Log::info('Request data:', ['kategori' => $request->all()]);

        try {
            // Simpan data kategori ke database
            $kategori = Kategori::create($validate);

            Log::info('Kategori berhasil disimpan:', ['kategori' => $kategori]);

            return response()->json([
                'success' => true,
                'message' => 'Data kategori berhasil disimpan',
                'data' => $kategori
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan kategori:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan kategori',
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
