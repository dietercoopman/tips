<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => User::all()->first(),
            'category_id' => rand(1,2),
            'content'     => $this->faker->paragraph(),
            'content2'     => $this->faker->paragraph(),
            'content3'     => $this->faker->paragraph(),
            'content4'     => $this->faker->paragraph(),
            'content5'     => $this->faker->paragraph(),
            'content6'     => $this->faker->paragraph(),
            'content7'     => $this->faker->paragraph(),
            'content8'     => $this->faker->paragraph(),
            'content9'     => $this->faker->paragraph()
        ];
    }

}
