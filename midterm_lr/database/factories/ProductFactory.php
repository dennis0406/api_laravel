<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'desc'=>$this->faker->sentence(),
            'image'=>$this->faker->imageUrl(640, 480, 'foods', true),
            'price'=>$this->faker->randomDigit(),
            'category_id'=>$this->faker->numberBetween(1,3),
        ];
    }
}
