<?php

namespace Database\Factories;
use App\spare_part;
use Illuminatuse Illuminate\Support\Str;
use\Database\Eloquent\Factories\Factory;

class sparepartFactory extends Factory
{
    protected $model = spare_part::class;
    /**
     * Define the model's default state.
     *
     * 
     * @return array
     */

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->text,
        ];
    }
}
