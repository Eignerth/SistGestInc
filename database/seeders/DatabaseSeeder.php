<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory(1)->create();
        \App\Models\Kindidentification::factory(4)->create();
        \App\Models\Area::factory(4)->create();
        \App\Models\Possition::factory(20)->create();
        //\App\Models\Personal::factory(50)->create();
        \App\Models\User::factory(9000)->create();

    }
}
