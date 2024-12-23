<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanStats extends Model
{
    protected $fillable = [
        'costs',
        'income',
        'type',
    ];

    public function plan(): BelongsTo {
        return $this->belongsTo(Plan::class);
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }
}
