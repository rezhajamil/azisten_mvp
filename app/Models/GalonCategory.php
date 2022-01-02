<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalonCategory extends Model
{
    // use HasFactory;
    public $table="galon_categories";

    protected $fillable=[
        'name',
        'price',
        'description',
        'created_at',
        'updated_at',
    ];

    // Relation Table
    public function galonPurchase()
    {
        return $this->hasOne('App\Models\GalonPurchase', 'type');
    }
}
