<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalonPurchase extends Model
{
    use HasFactory, SoftDeletes;
    public $table = 'galon_purchases';

    protected $fillable = [
        'customer_id',
        'amount',
        'type',
        'coupon_code',
        'status_id',
        'review_id',
        'created_at',
        'updated_at',
    ];

    // Relation Table
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function galonCategory()
    {
        return $this->belongsTo('App\Models\GalonCategory', 'type', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id', 'id');
    }

    public function review()
    {
        return $this->belongsTo('App\Models\Review', 'review_id', 'id');
    }

    public function queue()
    {
        return $this->hasOne('App\Models\GalonQueue', 'order_id');
    }
}
