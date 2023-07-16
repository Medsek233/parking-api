<?php

namespace Database\Factories;

use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ZoneFactory extends Factory
{
    protected $model = Zone::class;

    public function definition()
    {
        $zoneName=[
            'Green Zone',
            'Red Zone',
            'Yellow Zone',
        ];

        foreach ($zoneName as $zone) {
            return [
                'price_per_hour' => $this->faker->numberBetween(1, 100),
                'name' => $zone,
            ];
        }
    }
}
