<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet_Sales_Cost_Statement extends Model
{
    use HasFactory;


    protected $fillable = [
        'code',
        'period_status',
        'date_order',
        'product_name',
        'product_sku',
        'produt_bare_code_type',
        'product_bare_code',
        'region',
        'country',
        'Vendor',
        'seller_name_last_name',
        'doviz_cinsi',
        'total_sales_price',
        'product_cost',
        'product_cost_tax_rate',
        'product_cost_tax',
        'product_cost_+_tax',
        'product_saller_price',
        'cargo_fee',
        'cargo_vergi_orani',
        'cargo_tax',
        'cargo_fee_+_tax',
        'product_karari_+_tax',
        'product_tax',
        'net_satis_kari',
        'transfert_tax_rate',
        'transfert_fee',
        'company_pay',
        'company_odenen',
        'pool_pay',
        'pool_odenen',
        'wallet_seller_kari',
        'wallet_seller_pay',
        'return_status',
        // 'user_id',
    ];

    /*  public function user()
    {
        return $this->belongsTo(User::class);
    } */
}