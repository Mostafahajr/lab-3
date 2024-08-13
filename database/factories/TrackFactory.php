<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
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
            'name'=>fake()->unique->name(),
            'studentNum'=>fake()->numberBetween(1,100),
            'image'=>'https://images.pexels.com/photos/177598/pexels-photo-177598.jpeg?auto=compress&cs=tinysrgb&w=600'
        ];
    }
}
// "name"=>fake()->unique()->text(),
// "totalgrade"=>fake()->numberBetween(100,100),
// "description"=>fake()->unique()->text(),
// "image"=>"https://www.pexels.com/photo/close-up-photo-of-programming-of-codes-546819/"
