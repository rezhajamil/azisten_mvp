<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlatKosPurchase extends Model
{
    use HasFactory,SoftDeletes;

    public $table = 'alat_kos_purchases';

    protected $fillable = [
        'customer_id',
        'item',
        'created_at',
        'updated_at',
    ];


    // Relation Table
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function alatKosProduct()
    {
        return $this->belongsTo('App\Models\AlatKosProduct', 'item','id');
    }
}
