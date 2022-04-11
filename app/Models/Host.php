<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'created_at',
        'updated_at',
    ];

    public function kos()
    {
        return $this->hasMany('App\Models\Kos', 'host_id');
    }
}
