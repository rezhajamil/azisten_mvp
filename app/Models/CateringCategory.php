<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CateringCategory extends Model
{
    use HasFactory,SoftDeletes;
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
