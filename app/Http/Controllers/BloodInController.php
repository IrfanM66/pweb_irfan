<?php

namespace App\Http\Controllers;

use App\Models\BloodEnter;
use App\Models\BloodType;
use Faker\Core\Blood;
use Illuminate\Http\Request;

class BloodInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blood_in = BloodEnter::all();
        $type = BloodType::all();
        
        return view('admin.home.bloodin',compact('blood_in','type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'blood_type_id'=> $request->type,
            'contributor_name'=>$request->contributor
        ];

        BloodEnter::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BloodEnter::find($id)->delete();

        return redirect()->back();
    }
}
