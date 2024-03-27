<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dovizler extends Model
{
    use HasFactory;


    protected $fillable = [

        'tarih',
        'dovizid',
        'dovizkod',

        'dovizaditr',


        'dovizadieng',
        'alisdegeritl',
        'satisdegeritl',
        'aktif',



    ];

    public function users()
    {
        return $this->hasMany( User::class);
    }
}