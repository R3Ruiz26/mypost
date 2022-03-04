<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text'=>  $this->faker->paragraph,
            'status'=>  $this->faker->randomElement([1,0]),
            'creation_date' =>  $this->faker->date(),

            'post_id' => rand(1,10)
        ];
    }
}
