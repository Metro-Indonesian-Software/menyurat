<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SearchScope implements Scope
{
    private string $searchColumn;
    private $searchValue;

    public function __construct(string $searchColumn, $searchValue)
    {
        $this->searchColumn = $searchColumn;
        $this->searchValue = $searchValue;
    }

    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->when($this->searchColumn && $this->searchValue, function() use($builder) {
            $builder->where($this->searchColumn, "like", "%".$this->searchValue."%");
        });
    }
}
