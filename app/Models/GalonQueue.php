<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalonQueue extends Model
{
    use HasFactory;

    public $table = 'galon_queues';

    protected $fillable = [
        'name',
        'phone',
        'order_id',
        'review_id',
        'created_at',
        'updated_at',
    ];

    // Relation Table
    public function galonPurchase()
    {
        return $this->belongsTo('App\Models\GalonPurchase', 'order_id', 'id');
    }
}
