<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;
    protected $table = 'blood_types';

    public function fkBloodin(){
        return $this->hasMany(BloodEnter::class,'blood_type_id','id');
    }

    public function fkBloodout(){
        return $this->hasMany(BloodEnter::class,'blood_type_id','id');
    }

}
