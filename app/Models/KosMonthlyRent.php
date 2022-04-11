<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KosMonthlyRent extends Model
{
    use HasFactory;

    protected $fillable = [
        'fee',
        'down_payment',
        'two_people_charge',
        'created_at',
        'updated_at',
    ];

    public function kos()
    {
        return $this->hasOne('App\Models\Kos', 'monthly_rent');
    }
}
