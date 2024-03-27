<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerQuotes extends Model
{
    use HasFactory;

    protected $fillable = [

        'region',
        'quota_price',
       // 'currency',
        'code',
        'name',
        'symbol',
        'status',
    //  'user_id'

    ];

  public function users(){
        return $this->hasMany(User::class);
    }


}