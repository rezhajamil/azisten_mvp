<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CateringPurchase extends Model
{
    use HasFactory,SoftDeletes;  

    public $table = 'catering_purchases';

    protected $fillable = [
        'customer_id',
        'type',
        'duration',
        'status_id',
        'review_id',
        'created_at',
        'updated_at',
    ];

    // Relation Table
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function cateringCategory()
    {
        return $this->belongsTo('App\Models\CateringCategory', 'type', 'id');
    }

    public function cateringDuration()
    {
        return $this->belongsTo('App\Models\CateringDuration', 'duration', 'id');
    }
}
