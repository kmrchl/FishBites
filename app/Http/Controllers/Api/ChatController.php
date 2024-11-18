<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use App\Models\Produk;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chatbox;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all(); // Mengambil semua customer untuk ditampilkan
        return view('chat.index', compact('customers'));
    }

    // Mengambil chat berdasarkan id_Customer
    public function show($id_customer)
    {

        $customer = Customer::findOrFail($id_customer);
        $chats = Chatbox::where('id_customer', $id_customer)->get(); // Mengambil chat berdasarkan id_customer
        $lastAdminId = Chatbox::where('id_customer', $id_customer)->latest()->value('id_admin');
        return view('chat.roomchat', compact('customer', 'chats', 'lastAdminId'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function add()
    {
        $admins = Admin::all();
        $customer = Customer::all();
        $chats = Chatbox::all();

        return view('chat.add', [
            'admins' => $admins,
            'customer' => $customer,
            'chats' => $chats
        ]);
    }

    public function store(Request $request, $id_customer)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'pesan' => 'required|string',
        ]);

        Chatbox::create([
            'id_customer' => $id_customer,
            'id_admin' => $request->id_admin,
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('chat.show', $id_customer)->with('success', 'Pesan berhasil dikirim');
    }

    /**
     * Display the specified resource.
     */

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
