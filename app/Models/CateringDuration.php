<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringDuration extends Model
{
    // use HasFactory;
    public $table = "catering_durations";

    protected $fillable = [
        'name',
        'amount',
        'created_at',
        'updated_at',
    ];

    // Relation Table
    public function cateringPurchase()
    {
        return $this->hasOne('App\Models\CateringPurchase', 'duration');
    }
}
