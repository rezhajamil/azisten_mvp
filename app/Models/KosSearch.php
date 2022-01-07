<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KosSearch extends Model
{
    use HasFactory,SoftDeletes;

    public $table = 'kos_searches';

    protected $fillable = [
        'customer_id',
        'college',
        'facility',
        'type',
        'payment_interval',
        'price_min',
        'price_max',
        'referral_code',
        'created_at',
        'updated_at',
    ];

    public function customer()
    {
        return $this->belongsToMany('App\Models\Customer', 'customer_id', 'id');
    }
}
