<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'service_id',
        'rating',
        'review',
    ];

    public function kosSearch()
    {
        return $this->hasOne('App\Models\KosSearch', 'customer_id');
    }
}
