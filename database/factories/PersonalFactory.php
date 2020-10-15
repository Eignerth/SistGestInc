<?php

namespace Database\Factories;

use App\Models\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'idkindident'=>\App\Models\Kindidentification::factory(),
            'kindident'=>$this->faker->unique()->randomNumber(8),
            'ruc'=>$this->faker->unique()->numberBetween(11111111111,99999999999),
            'telf'=>$this->faker->optional(40)->numberBetween(111111111,999999999),
            'cel'=>$this->faker->optional(60)->numberBetween(111111111,999999999),
            'ownemail'=>$this->faker->unique()->email,
            'email'=>$this->faker->email,
            'address'=>$this->faker->address,
            'dateborn'=>$this->faker->optional(50)->date('Y-m-d','-10 years'),
            'idpossitions'=>\App\Models\Possition::factory(),
            'addnote'=>$this->faker->text(),
        ];
    }
}
