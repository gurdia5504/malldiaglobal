<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_sku',
        'produt_barecode_type',
        'product_barecode',
        'description',
        'color',
        'price',
        'code',
    ];



}