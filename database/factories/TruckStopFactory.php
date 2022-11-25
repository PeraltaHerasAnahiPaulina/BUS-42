<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TruckStop>
 */
class TruckStopFactory extends Factory
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
            'Name_Truck_stop'=> $this->faker->streetAddress(50),
            'Length'=>$this->faker->buildingNumber(50),
            'Latitude'=>$this->faker->buildingNumber(50),
        ];
    }
}
