<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\College;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $campuses = Campus::all();
        $colleges = College::all();
        return view('home', compact('campuses', 'colleges'));
    }

    public function sendMessage(Request $request)
    {
        $text = "Halo Azisten.\nKenalin saya " . $request->name . ".\n" . $request->message;

        return redirect('https://wa.me/6285869205026?text=' . rawurlencode($text));
    }
}
