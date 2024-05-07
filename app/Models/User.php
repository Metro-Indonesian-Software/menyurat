<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Scopes\OrderByScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'web_url',
        'street',
        'urban_village',
        'district',
        'region',
        'province',
        'phone_number',
        'postal_code',
        'logo_url',
        'password',
        'active',
        'completed',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'web_url' => 'string',
        'street' => 'string',
        'urban_village' => 'string',
        'district' => 'string',
        'region' => 'string',
        'province' => 'string',
        'phone_number' => 'string',
        'postal_code' => 'integer',
        'logo_url' => 'string',
        'active' => 'boolean',
        'completed' => 'boolean',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new OrderByScope(request()->query("orderBy")));
    }

    public function scopeSearch(Builder $builder, $keyword)
    {
        $builder->when($keyword !== null, function() use($keyword, $builder) {
            $builder->where("name", "like", "%".$keyword."%");
        });
    }

    public function scopeActive(Builder $builder, $active)
    {
        $builder->when($active !== null, function() use($active, $builder) {
            $builder->where("active", intval($active));
        });
    }
}
