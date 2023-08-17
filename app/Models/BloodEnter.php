<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodEnter extends Model
{
    use HasFactory;
    protected $table = 'blood_enters';
    protected $fillable = [
        'blood_type_id',
        'contributor_name'
    ];

    public function fkBloodTypes(){
        return $this->belongsTo(BloodType::class,'blood_type_id','id');
    }
}
