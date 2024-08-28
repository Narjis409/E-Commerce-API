<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = category::class;

    /**

     * @return array
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->word(),
            'description' => $this->faker->optional()->paragraph(),

            // Automatically set the created_at and updated_at timestamps
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
