<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DonHang>
 */
class DonHangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'diemden' => Str::random(10),
            'ide' => rand(100,1000),
            'role' => Arr::random(['admin','user','guest']),
            'birht_day' => fake()->date($format = 'Y-m-d', $max= 'now'),
            'phone' => rand(23,40)
        ];
    }
}
