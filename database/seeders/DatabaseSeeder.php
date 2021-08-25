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
        //\App\Models\User::factory(10)->create();
        \App\Models\eps::factory(10)->create();
        \App\Models\citas::factory(0)->create();
        \App\Models\medicos::factory(10)->create();
        \App\Models\sedes::factory(5)->create();
        \App\Models\citas::factory(5)->create();
    }
}
