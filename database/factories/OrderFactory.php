<?php

namespace Database\Factories;

use App\Models\order;
use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = order::class;

    /**

     * @return array
     */
    public function definition(): array
    {
        return [

            'customer_id' => customer::factory(),
            'status' => $this->faker->randomElement(['pending', 'completed', 'shipped', 'cancelled']),
            'total_amount' => $this->faker->randomFloat(2, 10, 5000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
