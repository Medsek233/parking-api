<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Vehicle extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'plate_number',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        static::addGlobalScope('user',function (Builder $builder) {
            $builder->where('user_id',auth()->id());
        });
    }
}
