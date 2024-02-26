<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'county_id',
        'name',
    ];

    function county(): BelongsTo
    {
        return $this->belongsTo(County::class);
    }
}
