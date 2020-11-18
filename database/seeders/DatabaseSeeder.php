<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Company::factory(1)->create();
        \App\Models\Possition::factory(5)->create();
        //\App\Models\Personal::factory(50)->create();
        \App\Models\User::factory(3)->create();

    }
}
