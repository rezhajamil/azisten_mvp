<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KosCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'created_at',
        'updated_at',
    ];

    public function kos()
    {
        return $this->hasMany('App\Models\Kos', 'category', 'id');
    }
}
