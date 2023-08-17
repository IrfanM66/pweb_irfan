<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['A+','A-','B+','B-','O-','O+','AB-','AB+'];
        foreach($types as $type){
            DB::table('blood_types')->insert([
                'type' => $type,
                
            ]);
        }
        
    }
}
