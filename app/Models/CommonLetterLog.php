<?php

namespace App\Models;

use App\Models\Scopes\CommonLogByUserScope;
use App\Models\Scopes\OrderByScope;
use App\Observers\CommonLetterLogObserver;
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'user_id' => 'string',
        'title' => 'string',
        'type' => 'string',
        'number_of_letter' => 'string',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new OrderByScope(request()->query("orderBy")));
        static::addGlobalScope(new CommonLogByUserScope); // TODO TEST: kalau mau test di comment dulu
        CommonLetterLog::observe(CommonLetterLogObserver::class);
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
