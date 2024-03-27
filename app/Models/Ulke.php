<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulke extends Model
{
    use HasFactory;


    protected $fillable = [

          'country_code',
          'country_phone_code',
           'desi_id',
          'ulke_kodu',

         'trisim',

           'engisim',

          'bolge_id',

    ];

    public function  regions(){

        return $this->belongsTo(Yayinbolgeleri::class);
    }

    public function states(){

        return $this->hasMany(Il::class);
    }

}