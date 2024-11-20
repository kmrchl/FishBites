<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // Mengarahkan ke resources/views/index.blade.php
        return view('index');
    }
}
