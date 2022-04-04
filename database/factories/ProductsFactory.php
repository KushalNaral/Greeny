<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'vendor_id' => $this->faker->randomDigitNotZero(),
            'category_id' => $this->faker->randomDigitNotZero(),
            'product_name' => $this->faker->name(),
            'desc' => $this->faker->paragraph(4),
            'current_price' => $this->faker->randomDigitNotZero(),
            'old_price' => $this->faker->randomDigitNotZero(),
            'availability_status' => '1',


        ];
    }
}
