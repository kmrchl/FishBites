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
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

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
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = Admin::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'message' => 'Admin created successfully.',
            'data' => $data
        ], 201);
    }


    // LOGIN
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Mencari admin berdasarkan username
        $admin = Admin::where('username', $request->username)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Membuat token
        $token = $admin->createToken('Admin Token')->plainTextToken;

        return response()->json([
            'Message' => 'Login Berhasil. Selamat datang!',
            'token' => $token,
            'admin' => $admin->username
        ]);
    }
    public function logout(Request $request)
    {
        // Cek apakah token valid
        if ($request->user()) {
            $request->user()->tokens->each(function ($token) {
                $token->delete();
            });

            return response()->json(['message' => 'Logged out successfully']);
        }

        try {
            $request->user()->tokens->each(function ($token) {
                $token->delete();
            });

            return response()->json(['message' => 'Logged out successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['error' => 'Not authenticated'], 401);
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
