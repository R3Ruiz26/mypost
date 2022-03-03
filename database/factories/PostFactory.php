<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->text(10),
            'text'=>  $this->faker->paragraph,
            'status'=>  $this->faker->randomElement([1,0]),
            'creation_date' =>  $this->faker->date(),

            'category_id' => rand(1,5),
            'autor_id' => rand(1,10)
        ];
    }
}
