<?php

namespace Database\Factories;

use App\Models\Kindidentification;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class KindidentificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kindidentification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'abbreviation'=>Str::random(3),
            'description'=>Str::random(30),
            'ndigits'=>$this->faker->numberBetween(8,13),
        ];
    }
}
