<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'birth_day',
        'gender',
        'state',
        'currency',
        'image_path',
        'role',
        'valid',
        'cover',
        'image',
        'isActive',
        'status',
        'approved',
        'code',
        'currency_id',
         'seller_quotes_id',
        'dovizlers_id',
        'bolge_id',
        // 'seller_quotes' ,
        'avatar',
        'first_name',
        'last_name',
        'email',
        'password',
        'registration_type',
        'tc_vkn',
        'company_type',
        'trade_name',
        'taxe_admin',
        'taxe_number',
        'mersis_no',
        'registration_number',
        'regions',
        'country',
        'city',
        'phone',
        'fx_rate',
        'bank_name',
        'iban',
        'category',
        'address',
    ];

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function walletSallesCost()
    {
        return $this->hasMany(WalletCostsheet::class);
    }

    public function wallet_order_lists()
    {
        return $this->hasMany(WalletOrderList::class);
    }

    public function seller_quotes()
    {

        return $this->belongsTo(SellerQuotes::class);
    }


    public function currencies()
    {

        return $this->belongsTo(Currency::class);
    }

    public function dovizlers()
    {
        return $this->belongsTo(Dovizler::class);
    }

    public function yayinbolgeleris()
    {
        return $this->belongsTo(Yayinbolgeleri::class);
    }

    public function regions()
    {
        return $this->belongsTo(Region::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}