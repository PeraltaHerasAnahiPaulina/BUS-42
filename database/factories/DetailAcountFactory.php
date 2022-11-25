<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailAcount>
 */
class DetailAcountFactory extends Factory
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
            'ID_Driver'=>$this->faker->numberBetween(1,10),
            'ID_User'=>$this->faker->numberBetween(1,50),
        ];
    }
}
