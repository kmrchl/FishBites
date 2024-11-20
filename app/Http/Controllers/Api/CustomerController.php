<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Claims\Custom;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customer = Customer::all();

        return response()->json($customer);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function add()
    {
        return view('customer.add');
    }

    public function store(Request $request)
    {
        Log::info('Request data:', $request->all());

        // Lakukan validasi
        $validate = $request->validate([
            'nama_customer' => 'required|string|max:255',
            'email' => 'required|string|unique:customer,email',
            'password' => 'required|string|min:8',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string'
        ]);


        try {
            // Simpan data customer ke dalam database
            $customer = Customer::create([
                'nama_customer' => $validate['nama_customer'],
                'email' => $validate['email'],
                'password' => Hash::make($validate['password']),
                'alamat' => $validate['alamat'],
                'no_telp' => $validate['no_telp'],
            ]);

            Log::info('Customer berhasil disimpan:', ['customer' => $customer]);

            return response()->json([
                'success' => true,
                'message' => 'Data customer berhasil disimpan',
                'data' => $customer
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan customer:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan customer',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Mencari customer berdasarkan email
        $customer = Customer::where('email', $request->email)->first();

        if (!$customer || !Hash::check($request->password, $customer->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Membuat token
        $token = $customer->createToken('cust_token')->plainTextToken;

        return response()->json([
            'Message' => 'Login Berhasil. Selamat datang!' . $customer->nama_customer,
            'token' => $token,
            'customer' => $customer->nama_customer
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $customer = Customer::all();

        return view('customer.index', [
            'customer' => $customer
        ]);
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
    public function destroy(string $id_customer)
    {
        $customer = Customer::find($id_customer);
        if (!$customer) {
            return redirect()->back()->with('error', 'ID tidak ditemukan');
        }

        $customer->delete();

        // return redirect()->back()->with('success', 'Produk berhasil dihapus');
        return response()->json([
            'success' => true,
            'message' => 'Data customer berhasil dihapus',
            'data' => $customer
        ], 201);
    }
}
