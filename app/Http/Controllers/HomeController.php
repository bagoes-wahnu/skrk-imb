<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skrk;

class HomeController extends Controller
{
    public function index()
    {
        return view('home1');
    }
    public function show($id_imb)
    {
        $aspects = Skrk::findOrFail($id_imb);
        return view('home2', compact('aspects'));
    }
}
