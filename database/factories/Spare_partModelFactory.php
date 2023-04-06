<?php

namespace Database\Factories;
use App\spare_part;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class Spare_partModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_spare_part' => $this->faker->id(),
            'jenis' => $this->faker->name(),
            'qty'    => $this->faker->number(),
            'created_at' => $this->faker->date($format='Y-m-d', $max='now')
        ];
    }
}
