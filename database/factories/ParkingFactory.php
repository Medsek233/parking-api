<?php

namespace Database\Factories;

use App\Models\Parking;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ParkingFactory extends Factory
{
    protected $model = Parking::class;

    public function definition()
    {
        return [
            'start_time' => Carbon::now(),
            'stop_time' => Carbon::now(),
            'total_price' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
