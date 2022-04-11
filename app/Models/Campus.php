<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'college_id',
        'address',
        'province',
        'city',
        'dsitrict',
        'latitude',
        'longtitude',
        'created_at',
        'updated_at',
    ];


    public function college()
    {
        return $this->belongsTo('App\Models\College', 'college_id', 'id');
    }
}
