<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'Name_Driver'=>$this->faker->name,
            'Phone_Number'=>$this->faker->phoneNumber(),
            'Age'=>$this->faker->text(),
            'License'=>$this->faker->imageUrl(),
            'ID_Center'=>$this->faker->numberBetween(1,20),

        ];
    }
}
