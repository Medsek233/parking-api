<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parking extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'zone_id',
        'vehicle_id',
        'start_time',
        'stop_time',
        'total_price',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'stop_time' => 'datetime',
    ];

    public function zone(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }

    public function vehicle(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function scopeActive($query)
    {
        return $query->whereNull('stop_time');
    }

    public function scopeStopped($query)
    {
        return $query->whereNotNull('stop_time');
    }

    protected static function booted()
    {
        static::addGlobalScope('user', function (Builder $builder) {
            $builder->where('user_id', auth()->id());
        });
    }
}
