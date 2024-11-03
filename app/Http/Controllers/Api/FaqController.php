<?php

namespace App\Http\Controllers\api;

use App\Models\Faq;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = Faq::all();

        return view('faq.index', ['faq' => $faq]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function add()
    {
        $admins = Admin::all();
        return view('faq.add', ['admins' => $admins]);
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string|max:65535',
        ]);

        Faq::create([
            'id_admin' => $validate['id_admin'],
            'pertanyaan' => $validate['pertanyaan'],
            'jawaban' => $validate['jawaban'],
        ]);
        Log::info("FaQ berhasil disimpan.");

        // $data = [
        //     'id_admin' => $request->input('id_admin'),
        //     'judul' => $request->input('judul'),
        //     'konten' => $request->input('konten'),
        //     'tgl_upload' => $request->input('tgl_upload'),
        // ];

        // Artikel::create($data);

        return redirect('/faq');
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

    public function edit($id_faq)
    {
        $faq = Faq::find($id_faq);
        if (!$faq) {
            return redirect('/')->with('error', 'faq tidak ditemukan.');
        }

        $admins = Admin::all();

        // Tampilkan form edit
        return view('faq.edit', compact('faq', 'admins'));
    }

    public function update(Request $request, $id_faq)
    {
        $faq = Faq::find($id_faq);

        if (!$faq) {
            return redirect('/')->with('error', 'FaQ tidak ditemukan.');
        }

        $faq->id_admin = $request->input('id_admin');
        $faq->pertanyaan = $request->input('pertanyaan');
        $faq->jawaban = $request->input('jawaban');

        $faq->save();

        return redirect('/FaQ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_faq)
    {
        $faq = Faq::find($id_faq);
        if (!$faq) {
            return redirect()->back()->with('error', 'ID tidak ditemukan');
        }

        $faq->delete();

        // return redirect()->back()->with('success', 'Produsen berhasil dihapus');
        return redirect('/faq');
    }
}