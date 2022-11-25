<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'Name'=>$this->faker->name,
            'Img_User'=>$this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg']),
            'Matricula'=>$this->faker->numberBetween(),
            //foreign
            'ID_Cuatrimestre'=>$this->faker->numberBetween(1,16),
            'ID_Direction'=>$this->faker->numberBetween(1,30),
            'ID_Trajectory'=>$this->faker->numberBetween(1,3),
        ];
    }
}
