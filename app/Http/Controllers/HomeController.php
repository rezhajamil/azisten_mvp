<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        return view('home');
    }

    public function sendMessage(Request $request){
        $text="Halo Azisten.\nKenalin saya ".$request->name.".\n".$request->message;

        return redirect('https://wa.me/6285869205026?text='. rawurlencode($text));
    }
}
