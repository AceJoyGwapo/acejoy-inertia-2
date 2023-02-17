<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Office;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $count = 1;
        $office = Office::find($count);
        $count++;

        return [
            'office_id' => $office->id,
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'value' => fake()->randomFloat(2, 1000, 9999),
            'status' => fake()->randomElement(["good", "good", "defect"]),
            'date_acquired' => fake()->date('Y_m_d')
        ];
    }
}
