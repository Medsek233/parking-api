<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parking extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'start_time',
        'stop_time',
        'total_price',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'stop_time' => 'datetime',
    ];
}
