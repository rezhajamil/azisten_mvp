<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Afiliator extends Model
{
    use HasFactory,SoftDeletes;
    public $table="afiliators";

    protected $fillable=[
        'name',
        'email',
        'phone',
        'gender',
        'address',
        'referral_code',
        'created_at',
        'updated_at',
    ];
}
