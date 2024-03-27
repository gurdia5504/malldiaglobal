<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletOrderList extends Model
{
    use HasFactory;

    protected $fillable = [

        'seller_name_last name',

        'code',

        'date_order',
        'product_name',
        'product_sku',
        'produt_barecode_type',
        'product_barecode',
        'region',
        'country',
        'Vendor',
        'siparis_depo_id',
        'seller_winner',

        'pool_kazanci',

        'order_status',


        'user_id',
        //   'product_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
