<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Campus extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'college_id',
        'address',
        'province',
        'city',
        'district',
        'latitude',
        'longitude',
        'created_at',
        'updated_at',
    ];


    public function college()
    {
        return $this->belongsTo('App\Models\College', 'college_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
