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
            "name"=>fake()->unique()->name(),
            "total"=>100,
            "desc"=>fake()->text(),
            "image"=>"https://images.pexels.com/photos/27054232/pexels-photo-27054232/free-photo-of-a-road-with-a-sign-that-says-road-to-the-ocean.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        ];
    }
}
