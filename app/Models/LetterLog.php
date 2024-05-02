<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class LetterLog extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'common_letter_log_id',
        'field_name',
        'field_value',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'common_letter_log_id' => 'string',
        'field_name' => 'string',
    ];

    public function commonLetterLog(): BelongsTo
    {
        return $this->belongsTo(CommonLetterLog::class);
    }
}
