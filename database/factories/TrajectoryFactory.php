<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trajectory>
 */
class TrajectoryFactory extends Factory
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
            'Name_Trayectory'=> $this->faker->streetAddress(50),
            'Length'=>$this->faker->buildingNumber(50),
            'Latitude'=>$this->faker->buildingNumber(50),
        ];
    }
}
