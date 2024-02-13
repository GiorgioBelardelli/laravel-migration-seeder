<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake() -> word(10),
            'arrival_station' => fake() -> word(20),
            'department_station' => fake() -> word(20),
            'arrival_time' => fake() -> dateTimeInInterval('-3 days', '+3 days'),
            'department_time' => fake() -> dateTimeInInterval('-3 days', '+3 days'),
            'coach_number' => fake() -> randomDigit(),
            'train_id' => fake() -> randomNumber(5, true),
            'available' => fake() -> boolean(),
            'on_time' => fake() -> boolean()
        ];
    }
}
