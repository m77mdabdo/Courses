<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
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
            'name'=>$this->faker->name(),
            'spec'=>$this->faker->jobTitle(),
            'phone'=>$this->faker->phoneNumber(),
            'user_id'=>$this->faker->numberBetween(1,10),
            'image'=>$this->faker->imageUrl(640, 480, 'trainers', true),
            // 'age'=>$this->faker->numberBetween(20,60),

        ];
    }
}
