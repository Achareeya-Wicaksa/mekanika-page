<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        // Cukup menampilkan view tanpa data
        return view('models.index');
    }
}
