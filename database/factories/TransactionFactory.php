<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale(),
            'order' => $this->faker->randomElement(['Stiker', 'Mug', 'Undangan','MMT']),
            'qty' => 100,
            'price' => 5000,
            'total' => 500000,
            'order_date' => $this->faker->randomElement(['2022-01-01', '2022-02-01', '2022-02-07', '2022-01-15', '2022-01-30']),
            'due_date' => $this->faker->randomElement(['2022-01-01', '2022-02-01', '2022-02-07', '2022-01-15', '2022-01-30']),
            'status' =>$this->faker->randomElement(['Waiting List', 'On Process', 'Done']),
        ];
    }
}
