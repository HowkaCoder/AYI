<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "menu_id"=>rand(1,10),
            "name"=>$this->faker->name(),
            "price"=>$this->faker->numerify(),
            "img1"=>$this->faker->name(),
            "img2"=>$this->faker->name(),
            "img3"=>$this->faker->name()
        ];
    }
}
