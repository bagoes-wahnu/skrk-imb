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
    public function show($gid)
    {
        $aspects = Skrk::findOrFail($gid);
        return view('home2', compact('aspects'));
    }
}
