<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use App\Models\Produk;
use App\Models\Artikel;
use App\Models\Produsen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show = Produk::all();
        $produsen = Produsen::all();
        $artikel = Artikel::all();

        return view('home', [
            'show' => $show,
            'produsen' => $produsen,
            'artikel' => $artikel

        ]);
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
