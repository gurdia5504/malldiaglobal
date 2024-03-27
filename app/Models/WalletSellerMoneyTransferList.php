<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletSellerMoneyTransferList extends Model
{
    use HasFactory;


    protected $fillable = [
        'code',
         'seller_name_last name',
            'record_type',
            'Vendor',
            'region',
            'country',
            'tax',
            'communication',
            'email',
            ' money_demand_date',
            'transfer_date_day',
            ' seller_quota',
            'bank_name',
            'iban',
            'doviz_cinsi',
            ' transfer_status',
            'transfert_status',
            'transactions',
            'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}