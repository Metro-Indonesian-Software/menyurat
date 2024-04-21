<?php

namespace App\Models;

use App\Models\Scopes\OrderByScope;
use App\Models\Scopes\SearchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class CommonLetterLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new OrderByScope(request()->query("orderBy")));
        static::addGlobalScope(new SearchScope("name", request()->query("keyword")));
    }

    public function scopePublished(Builder $builder, int $published)
    {
        $builder->when($published, function() use($published, $builder) {
            if($published) {
                // $builder->where("")
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
