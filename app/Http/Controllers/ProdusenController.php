<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Produsen;
use Illuminate\Http\Request;

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
            'lokasi' => 'required|string',
        ]);

        // Buat post baru
        $produsen = Produsen::create([
            'nama_produsen' => $validatedData['nama_produsen'],
            'lokasi' => $validatedData['lokasi'],
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_produsen)
    {
        $produsen = Produsen::find($id_produsen);

        $produsen->delete();

        return redirect('/');
    }
}
