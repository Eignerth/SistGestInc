<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition()
    {
        return [
            'description'=>$this->faker->company,
            'ruc'=>'12345678901',
            'address'=>$this->faker->address,
            'telf'=>'977323536',
            'web'=>$this->faker->url(),
            'principal'=>$this->faker->name(),
            'email'=>$this->faker->email(),

        ];
    }
}
