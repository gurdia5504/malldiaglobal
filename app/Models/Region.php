<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;


    protected $fillable = [
        'bolge',

        'code',
        'region',
        'quota_price',



    ];



    public function users()
    {

        return $this->hasMany(User::class);
    }


    public function  countries()
    {
        return $this->hasMany(Country::class);
    }
}
