<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory,SoftDeletes;

    public $table = 'customers';

    protected $fillable = [
        'name',
        'phone',
        'address',
        'created_at',
        'updated_at',
    ];

    // Relation table
    public function kosSearch()
    {
        return $this->hasOne('App\Models\KosSearch', 'customer_id');
    }

    public function galonPurchase()
    {
        return $this->hasMany('App\Models\GalonPurchase', 'customer_id');
    }

    public function cateringPurchase()
    {
        return $this->hasMany('App\Models\CateringPurchase', 'customer_id');
    }

    public function alatKosPurchase()
    {
        return $this->hasMany('App\Models\AlatKosPurchase', 'customer_id');
    }
}
