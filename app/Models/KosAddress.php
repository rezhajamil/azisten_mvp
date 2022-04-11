<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KosAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'kos_id',
        'address',
        'province',
        'city',
        'district',
        'sub_district',
        'latitude',
        'longitude',
        'created_at',
        'updated_at',
    ];


    public function kos()
    {
        return $this->hasOne('App\Models\Kos', 'address');
    }
}
