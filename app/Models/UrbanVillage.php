<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanVillage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'district_id',
        'code',
        'name',
        'full_code',
        'postal_code',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'district_id'  => 'integer',
        'name'  => 'string',
        'code'  => 'string',
        'full_code'  => 'string',
        'postal_code'  => 'string',
    ];
}
