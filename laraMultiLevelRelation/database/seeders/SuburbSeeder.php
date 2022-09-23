<?php

namespace Database\Seeders;

use App\Models\Suburb;
use Illuminate\Database\Seeder;

class SuburbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // will generate 10 demo Suburb.

        Suburb::factory(10)->create();
    }
}
