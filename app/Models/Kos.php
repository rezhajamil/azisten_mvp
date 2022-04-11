<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $fillable = [
        'host_id',
        'name',
        'type',
        'facility',
        'address',
        'yearly_rent',
        'monthly_rent',
        'category',
        'desc',
        'created_at',
        'updated_at',
    ];


    public function host()
    {
        return $this->belongsTo('App\Models\Host', 'host_id', 'id');
    }

    public function kosType()
    {
        return $this->belongsTo('App\Models\KosType', 'type', 'id');
    }

    public function kosAddress()
    {
        return $this->belongsTo('App\Models\KosAddress', 'address', 'id');
    }

    public function kosYearlyRent()
    {
        return $this->belongsTo('App\Models\KosYearlyRent', 'yearly_rent', 'id');
    }

    public function kosMonthlyRent()
    {
        return $this->belongsTo('App\Models\KosMonthlyRent', 'monthly_rent', 'id');
    }

    public function kosCategory()
    {
        return $this->belongsTo('App\Models\KosCategory', 'category', 'id');
    }

    public function kosImage()
    {
        return $this->hasMany('App\Models\KosImage', 'kos_id', 'id');
    }
}
