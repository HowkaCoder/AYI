<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "country_id"=>rand(1,10),
            "name"=>$this->faker->name() ,
            "location"=>$this->faker->text(),
            "main_img"=>$this->faker->numerify()
        ];
    }
}
