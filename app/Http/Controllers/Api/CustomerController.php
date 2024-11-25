<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Claims\Custom;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'email' => 'required|string|unique:customer,email',
            'password' => 'required|string|min:8',
            'no_telp' => 'required|string|max:255',
            'no_telp' => 'required|string'
        ]);
        // $validate = $request->all();
        // dd($validate);


        try {
            $path = $request->file('foto')->store('foto', 'public');

            // Simpan data customer ke dalam database
            $customer = Customer::create([
                'nama_customer' => $validate['nama_customer'],
                'foto' => $path,
                'email' => $validate['email'],
                'password' => Hash::make($validate['password']),
                'no_telp' => $validate['no_telp'],
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
    public function update(Request $request, string $id_customer)
    {
        $request->merge($request->all()); // Memastikan data form-data bisa diakses
        $customer = Customer::findOrFail($id_customer);

        Log::info('Request Data:', $request->all()); //Log data input
        Log::info('Customer Found:', $customer->toArray());


        $validate = $request->validate([
            'nama_customer' => 'required|string|max:255',
            'foto' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg',
            'email' => 'required|string|email|unique:customer,email,' . $id_customer . ',id_customer',
            'password' => 'nullable|string|min:8',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string'
        ]);

        $path = $customer->foto; // Default foto tetap sama
        if ($request->hasFile('foto')) {
            // Validasi ulang file
            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);

            // Hapus file lama jika ada
            if ($customer->foto && Storage::exists('foto/' . $customer->foto)) {
                Storage::delete('foto/' . $customer->foto);
            }

            // Simpan file baru
            $fileName = time() . '.' . $request->foto->getClientOriginalExtension();
            $path = $request->foto->storeAs('foto', $fileName, 'foto');
        }

        $customer->update([
            'nama_customer' => $validate['nama_customer'] ?? $customer->nama_customer,
            'foto' => $path,
            'email' => $validate['email'] ?? $customer->email,
            'password' => $request->filled('password') ? Hash::make($validate['password']) : $customer->password,
            'alamat' => $validate['alamat'] ?? $customer->alamat,
            'no_telp' => $validate['no_telp'] ?? $customer->no_telp,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data customer berhasil diupdate',
            'data' => $customer
        ], 200);
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
