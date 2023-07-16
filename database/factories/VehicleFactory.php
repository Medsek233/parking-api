<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'plate_number' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
