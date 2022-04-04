<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ct = $this->faker->sentence(2);
        return [

            'title' => $ct,
            'slug' =>  Str::slug($ct, '-'),
        ];
    }
}
