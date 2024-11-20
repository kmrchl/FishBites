<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use App\Models\Produsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProdusenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produsen = Produsen::all();

        return response()->json($produsen);
    }

    public function add()
    {
        return view('produsen.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_produsen' => 'required|string',
            'lokasi' => 'required|string'
        ]);

        Log::info('Request data:', ['produsen' => $request->all()]);

        try {
            // Simpan data produsen ke database
            $produsen = Produsen::create($validate);

            Log::info('produsen berhasil disimpan:', ['produsen' => $produsen]);

            return response()->json([
                'success' => true,
                'message' => 'Data produsen berhasil disimpan',
                'data' => $produsen
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan produsen:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan produsen',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function login(Request $request)
    {
        // Validasi data login
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string',
        ]);

        // Mencari customer berdasarkan email
        $customer = Customer::where('username', $request->username)->first();

        // Memeriksa kredensial
        if (!$customer || !Hash::check($request->password, $customer->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Membuat token setelah login
        $token = $customer->createToken('auth_token')->plainTextToken;

        // Mengirim response JSON
        return response()->json([
            'message' => 'Login successful',
            'customer' => $customer,
            'token' => $token,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $produsen = Produsen::all();

        return view('produsen.index', ['produsen' => $produsen]);
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
