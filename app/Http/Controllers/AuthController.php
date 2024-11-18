<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|username',
            'password' => 'required'
        ]);

        // Cari user berdasarkan username
        $admin = Admin::where('username', $request->username)->first();

        // Periksa apakah password cocok
        if (!$admin || !Hash::check($request->password, $admin->password)) {
            throw ValidationException::withMessages([
                'username' => ['Email atau password tidak sesuai.'],
            ]);
        }

        // Buat token
        $token = $admin->createToken('auth_token')->plainTextToken;

        // Kembalikan respons token
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'admin' => $admin
        ]);
    }

    // Tambahkan fungsi untuk logout jika perlu
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    }
}
