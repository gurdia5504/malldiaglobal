<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Il extends Model
{
    use HasFactory;


    protected $fillable = [
        'isim',
        'ulkeid'

    ];

    public function countries()
    {
        return $this->belongsTo(Ulke::class);
    }

    public function cyties(){
        return $this->hasMany(Ilce::class);
    }
}