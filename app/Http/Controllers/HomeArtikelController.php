<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeArtikelController extends Controller
{

    public function index(){
        $artikels = Artikel::all();
        return view('artikelhome',compact('artikels'));
    }
    public function view($id){
        $artikel = Artikel::find($id);

        return view('artikel',compact('artikel'));
    }
}
