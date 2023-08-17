<?php

namespace App\Http\Controllers;

use App\Models\BloodEnter;
use App\Models\BloodTakes;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function index(){
        $sum_blood_e = BloodEnter::count();
        $sum_blood_t = BloodTakes::count();

        $summary = $sum_blood_e-$sum_blood_t;

        // A sum
        $A_plus = BloodEnter::where('blood_type_id','=',1)->count() - BloodTakes::where('blood_type_id','=',1)->count();
        $A_neg =    BloodEnter::where('blood_type_id','=',2)->count() - BloodTakes::where('blood_type_id','=',2)->count();

        // B sum
        $B_plus = BloodEnter::where('blood_type_id','=',3)->count() - BloodTakes::where('blood_type_id','=',3)->count();
        $B_neg = BloodEnter::where('blood_type_id','=',4)->count() - BloodTakes::where('blood_type_id','=',4)->count();
        
        //O sum
        $O_plus = BloodEnter::where('blood_type_id','=',6)->count() - BloodTakes::where('blood_type_id','=',6)->count();
        $O_neg = BloodEnter::where('blood_type_id','=',5)->count() - BloodTakes::where('blood_type_id','=',5)->count();

        // AB sum
        $AB_plus = BloodEnter::where('blood_type_id','=',8)->count() - BloodTakes::where('blood_type_id','=',8)->count();
        $AB_neg = BloodEnter::where('blood_type_id','=',7)->count() - BloodTakes::where('blood_type_id','=',7)->count();

        return view('admin.home.beranda',compact('sum_blood_e','sum_blood_t','summary','A_plus','A_neg','B_plus','B_neg','O_plus','O_neg','AB_plus','AB_neg'));
    }
}
