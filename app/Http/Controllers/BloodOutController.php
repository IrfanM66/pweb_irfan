<?php

namespace App\Http\Controllers;

use App\Models\BloodTakes;
use App\Models\BloodType;
use Illuminate\Http\Request;

class BloodOutController extends Controller
{
    public function index(){
        $blood_out = BloodTakes::all();
        $type = BloodType::all();
        return view('admin.home.bloodout',compact('blood_out','type'));
    }

    public function store(Request $request){
        $file = $request->file('photo');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/bukti',$filename);
        $path = str_replace('public/','',$path);

        $data = [
            'blood_type_id' => $request->type,
            'recipient_name' => $request->contributor,
            'recom_letter' => $path
        ];

        BloodTakes::create($data);
        return redirect()->back();
    }

}
