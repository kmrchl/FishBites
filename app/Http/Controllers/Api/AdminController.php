<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use App\Models\Produk;
use App\Models\Artikel;
use App\Models\Produsen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $show = Produk::all();
        // $produsen = Produsen::all();
        // $artikel = Artikel::all();

        // return view('home', [
        //     'show' => $show,
        //     'produsen' => $produsen,
        //     'artikel' => $artikel

        // ]);

        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function add()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Admin::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return response()->json(['message' => 'Customer created successfully. Please verify your email.'], 201);
    }


    // LOGIN
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah admin berhasil login
        if (Auth::guard('api')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // Ambil data admin yang sudah login
            $admin = Auth::guard('api')->user();  // Mendapatkan admin yang sudah login

            // Membuat token untuk admin yang berhasil login
            $token = $admin->createToken('Admin-Token')->plainTextToken;

            // Kembalikan response dengan token dan redirect URL
            return response()->json([
                'status' => 'success',
                'message' => 'Login berhasil!',
                'token' => $token,
                'redirect_url' => url('/home'), // Ganti dengan URL halaman yang dituju
            ], 200);
        }

        // Jika login gagal
        return response()->json([
            'status' => 'error',
            'message' => 'Username atau password salah',
        ], 401);
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
