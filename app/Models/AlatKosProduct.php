<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatKosProduct extends Model
{
    // use HasFactory;

    public $table='alat_kos_products';

    protected $guarded=[];

    // Relation Table
    public function alatKosPurchase()
    {
        return $this->hasMany('App\Models\AlatKosPurchase','item');
    }
}
