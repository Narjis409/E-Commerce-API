<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use App\Models\order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrderProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProduct::class;

    /**
     * Define the model's default state.
     *
     * This method returns an array of attribute values for the OrderProduct model.
     * The Faker library is used to generate random data for these attributes.
     *
     * @return array
     */
    public function definition(): array
    {
        return [

            'order_id' => order::factory(),

            'product_id' => Product::factory(),

            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
