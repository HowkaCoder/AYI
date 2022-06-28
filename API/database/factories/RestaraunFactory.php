<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaraunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->name(),
            "city_id"=>rand(1,10),
            "rcategory_id"=>rand(1,10),
            "location"=>$this->faker->name(),
            "describtion"=>$this->faker->text()
            
        ];
    }
}
