<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelsController extends Controller
{
    public function index(){
        $artikels = Artikel::all();
        // dd($artikels->count());

        return view('admin.home.artikel',compact('artikels'));
    }

    public function store(Request $request){
        // dd($request);
        $file = $request->file('photo');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/artikel',$filename);
        $path = str_replace('public/','',$path);

        $data = [
            'user_id' => Auth::user()->id,
            'title' => $request->tittle,
            'description' => $request->description,
            'photo' => $path
        ];

        Artikel::create($data);

        return redirect()->back();
    }

    public function destroy($id){
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect()->back();
    }
}
