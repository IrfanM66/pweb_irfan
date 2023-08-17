<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodTakes extends Model
{
    use HasFactory;
    protected $table = 'blood_takes';
    Protected $fillable = [
        'blood_type_id',
        'recipient_name',
        'recom_letter'
    ];

    public function fkBloodTypes(){
        return $this->belongsTo(BloodType::class,'blood_type_id','id');

    }
}
