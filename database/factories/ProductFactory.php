<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Array_;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [

        'name' => $this->faker->name(),
         'description' => $this->faker->text(),
         'cost' => $this->faker->randomFloat(2,1,1000),
         'price' => $this->faker->randomFloat(2,1,2000),
         'category_id' => category::factory(),
         'stock' => $this->faker->numberBetween(0,100),
        ];
    }
}
