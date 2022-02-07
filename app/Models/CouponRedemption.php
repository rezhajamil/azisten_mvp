<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponRedemption extends Model
{
    use HasFactory;
    public $table = "coupon_redemptions";

    protected $fillable = [
        'coupon_code',
        'total_discount',
        'redemption_date',
        'customer_id',
        'created_at',
        'updated_at',
    ];

    public function coupon()
    {
        return $this->belongsTo('App\Models\Coupon', 'coupon_code', 'coupon_code');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}
