<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function ikantawar()
    {
        return view('ikantawar');
    }

    public function ikantawardetail()
    {
        return view('ikantawar-detail');
    }

    public function ikanlaut()
    {
        return view('ikanlaut');
    }

    public function ikanlautdetail()
    {
        return view('ikanlaut-detail');
    }

    public function bibitpakan()
    {
        return view('bibitpakan');
    }

    public function bibitpakandetail()
    {
        return view('bibitpakan-detail');
    }

    public function blog()
    {
        return view('blog');
    }
    
    public function blogDetail()  // Ganti dari 'blog-detail' menjadi 'blogDetail'
    {
        return view('blog-detail');
    }
    
}

