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
    public function index(Request $request)
    {
        $artikel = Artikel::all();

        // return response()->json($artikel);

        return view('artikel.index', [
            'artikel' => $artikel
        ]);
    }

    public function showArtikelById(Request $request, $id_artikel)
    {
        $artikel = Artikel::findOrFail($id_artikel);

        return response()->json([
            'message' => 'Data berhasil diambil',
            'artikel' => $artikel
        ]);
        return view('profil.detail-artikel', compact('artikel'));
    }

    public function add()
    {
        $admins = Admin::all();
        return view('artikel.add', ['admins' => $admins]);
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
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'konten' => 'required|string'
        ]);

        if (empty($validate['id_admin'])) {
            return response()->json([
                'success' => false,
                'message' => 'Kolom id_admin wajib diisi.',
            ], 400);
        }
        // $validate = $request->all();
        // dd($validate);

        try {
            // Upload gambar ke folder 'public/gambar_produk'
            $path = $request->file('gambar')->store('images', 'public');

            // Simpan data artikel ke dalam database
            $artikel = Artikel::create([
                'id_admin' => $validate['id_admin'],
                'judul' => $validate['judul'],
                'gambar' => $path,
                'konten' => $validate['konten']
            ]);

            Log::info('Produk berhasil disimpan:', ['artikel' => $artikel]);

            return response()->json([
                'success' => true,
                'message' => 'Data artikel berhasil disimpan',
                'data' => $artikel
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan artikel:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan artikel',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        $artikel = Artikel::all();
        return view('profile.index', [
            'artikel' => $artikel
        ]);


        // Jika tidak, tampilkan tampilan Blade
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

        if (!$artikel) {
            return redirect('/')->with('error', 'Artikel tidak ditemukan.');
        }

        $artikel->id_admin = $request->input('id_admin');
        $artikel->judul = $request->input('judul');
        $artikel->konten = $request->input('konten');
        $artikel->tgl_upload = $request->input('tgl_upload');

        $artikel->save();

        return redirect('/');
    }

    public function getArtikelDetail($id)
    {
        // Mencari artikel berdasarkan id
        $artikel = Artikel::find($id);

        // Jika artikel ditemukan, kembalikan sebagai response JSON
        if ($artikel) {
            return response()->json($artikel);
        } else {
            // Jika artikel tidak ditemukan, kirimkan response 404
            return response()->json(['message' => 'Artikel tidak ditemukan'], 404);
        }
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

        // return redirect()->back()->with('success', 'Produk berhasil dihapus');
        return response()->json([
            'success' => true,
            'message' => 'Data artikel berhasil dihapus',
            'data' => $artikel
        ], 201);
        // return redirect()->back()->with('success', 'Produsen berhasil dihapus');
        // return redirect('/');
    }
}
