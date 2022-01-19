<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalonPurchase extends Model
{
    use HasFactory,SoftDeletes;
    public $table='galon_purchases';

    protected $fillable=[
        'customer_id',
        'amount',
        'type',
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
}
