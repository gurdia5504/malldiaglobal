<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        /*  'name',
        'code',
        'phonecode' */


        'country_code',
        'country_phone_code',
        'desi_id',
        'ulke_kodu',

        'trisim',

        'engisim',

        //  'bolge_id',
        'region_id'

    ];


    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function regions(){
        return $this->belongsTo(Region::class);
    }
}