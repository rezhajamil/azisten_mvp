<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlatKosProduct extends Model
{
    use HasFactory,SoftDeletes;

    public $table='alat_kos_products';

    protected $guarded=[];

    // Relation Table
    public function alatKosPurchase()
    {
        return $this->hasMany('App\Models\AlatKosPurchase','item');
    }
}
