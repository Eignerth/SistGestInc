<?php

namespace Database\Factories;

use App\Models\Possition;
use Illuminate\Database\Eloquent\Factories\Factory;

class PossitionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Possition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idareas'=>\App\Models\Area::factory(),
            'description'=>$this->faker->unique()->sentence,
            'addnote'=>$this->faker->text(),

        ];
    }
}
