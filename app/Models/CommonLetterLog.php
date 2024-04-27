<?php

namespace App\Models;

use App\Models\Scopes\CommonLogByUserScope;
use App\Models\Scopes\OrderByScope;
use App\Models\Scopes\SearchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CommonLetterLog extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'type',
        'number_of_letter',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new OrderByScope(request()->query("orderBy")));
        static::addGlobalScope(new CommonLogByUserScope);
    }

    public function scopeSearch(Builder $builder, $keyword)
    {
        $builder->when($keyword !== null, function() use($keyword, $builder) {
            $builder->where("title", "like", "%".$keyword."%");
        });
    }

    public function scopePublished(Builder $builder, $published)
    {
        $builder->when($published !== null, function() use($published, $builder) {
            if($published) {
                $builder->where("number_of_letter", "!=", null);
            }
            else {
                $builder->where("number_of_letter", null);
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
