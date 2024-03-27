<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



use Illuminate\Database\Eloquent\SoftDeletes;


class Currency extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "currencies";
    protected $guarded = [];


    protected $fillable = [
        'code',
        'name',
        'symbol',
        'status',
        'region',
        'quota_price',
        'currency',
       
        'name',
        'symbol',
        'status',
        'user_id'



    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

   }