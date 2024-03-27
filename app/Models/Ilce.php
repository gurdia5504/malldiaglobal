<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ilce extends Model
{
    use HasFactory;


    protected $fillable = [
        'isim',
        'il_id'

    ];

    public function states(){
        return $this->belongsTo(Il::class);
    }

}