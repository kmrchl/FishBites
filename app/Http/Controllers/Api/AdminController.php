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
            'message' => 'Customer created successfully.',
            'data' => $data
        ], 201);
    }


    // LOGIN
    public function login(Request $request)
    {
        // Validasi input
        // $validator = Validator::make($request->all(), [
        //     'username' => 'required|string',
        //     'password' => 'required|string',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'error' => $validator->errors()
        //     ], 400);
        // }

        // // Mencari admin berdasarkan username
        // $admin = Admin::where('username', $request->username)->first();

        // if (!$admin || !Hash::check($request->password, $admin->password)) {
        //     return response()->json([
        //         'error' => 'Unauthorized'
        //     ], 401);
        // }

        // // Menghasilkan token JWT
        // try {
        //     $token = JWTAuth::attempt(['username' => $request->username, 'password' => $request->password]);
        //     if (!$token) {
        //         return response()->json(['error' => 'Unauthorized'], 401);
        //     }
        // } catch (JWTException $e) {
        //     return response()->json(['error' => 'Could not create token'], 500);
        // }

        // // Mengembalikan token JWT
        // return response()->json([
        //     'message' => 'Login successful',
        //     'token' => $token,
        //     // 'redirect_url' => '/admin'
        // ]);

        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        // Cari admin berdasarkan username
        $admin = Admin::where('username', $request->username)->first();

        // Cek jika admin ditemukan dan password cocok
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Login dengan guard admin
            Auth::guard('web')->login($admin);
            // dd(Auth::guard('admin')->user());

            return response()->json([
                'message' => 'Login successful',
                'admin' => $admin,
            ], 200);

            return view('home');
        }
    }

    public function logout(Request $request)
    {
        // Invalidate the token
        JWTAuth::invalidate(JWTAuth::getToken());

        return response()->json([
            'message' => 'Logged out successfully',
            'redirect_url' => '/'
        ]);
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
