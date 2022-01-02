<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalonPurchase extends Model
{
    // use HasFactory;
    public $table='galon_purchases';

    protected $fillable=[
        'customer_id',
        'amount',
        'type',
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
