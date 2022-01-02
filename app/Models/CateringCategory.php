<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringCategory extends Model
{
    // use HasFactory;
    public $table = "catering_categories";

    protected $fillable = [
        'name',
        'price',
        'description',
        'created_at',
        'updated_at',
    ];

    // Relation Table
    public function cateringPurchase(){
        return $this->hasOne('App\Models\CateringPurchase','type');
    }
}
