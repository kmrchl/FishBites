<?php

namespace App\Http\Controllers\Api;

use App\Models\Produsen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdusenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produsen.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produsen' => 'required|string|max:255',
            'lokasi' => 'required|string'
        ]);

        // Buat post baru
        Produsen::create([
            'nama_produsen' => $validatedData['nama_produsen'],
            'lokasi' => $validatedData['lokasi']
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $produsen = Produsen::all();

        return view('home', ['produsen' => $produsen]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function edit($id_produsen)
    {
        $produsen = Produsen::find($id_produsen);

        if (!$produsen) {
            return redirect()->back()->with('error', 'Produsen tidak ditemukan');
        }

        return view('produsen.edit', compact('produsen')); // Mengirim data ke view edit
    }

    public function update(Request $request, $id_produsen)
    {
        $produsen = Produsen::find($id_produsen);

        if (!$produsen) {
            return redirect()->back()->with('error', 'Produsen tidak ditemukan');
        }

        // Validasi input
        $request->validate([
            'nama_produsen' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
        ]);

        // Update data produsen
        $produsen->update([
            'nama_produsen' => $request->nama_produsen,
            'lokasi' => $request->lokasi,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_produsen)
    {
        $produsen = Produsen::find($id_produsen);
        if (!$produsen) {
            return redirect()->back()->with('error', 'ID tidak ditemukan');
        }

        $produsen->delete();

        // return redirect()->back()->with('success', 'Produsen berhasil dihapus');
        return redirect('/');
    }
}
