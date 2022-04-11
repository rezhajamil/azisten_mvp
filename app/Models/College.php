<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'address',
        'created_by',
        'updated_by',
    ];

    public function campus()
    {
        return $this->hasMany('App\Models\Campus', 'college_id');
    }
}
