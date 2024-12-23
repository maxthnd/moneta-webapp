<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Plan extends Model
{

    protected $fillable = [
        'name',
        'budget',
    ];

    public function plan_stats(): HasOne {
        return $this->hasOne(PlanStats::class);
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }
}
