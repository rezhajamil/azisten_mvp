<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    public $table = "coupons";

    protected $primaryKey = 'coupon_code';
    protected $keyType = 'string';

    protected $fillable = [
        'coupon_code',
        'discount_amount',
        'discount_type',
        'expiration_date',
        'created_at',
        'updated_at',
    ];

    public function redeem()
    {
        return $this->hasOne('App\Models\CouponRedemption', 'coupon_code');
    }
}
