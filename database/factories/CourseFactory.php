<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'title'=>$this->faker->sentence(3),
            'desc'=>$this->faker->sentence(20),
            'image'=>$this->faker->imageUrl(640, 480, 'courses', true),
            'price'=>$this->faker->numberBetween(100,1000),
            'trainer_id'=>$this->faker->numberBetween(1,10),
            'category_id'=>$this->faker->numberBetween(1,10),
            'small_desc'=>$this->faker->sentence(10),


        ];
    }
}
