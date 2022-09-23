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
        $this->call(PlayerSeeder::class);
        $this->call(SuburbSeeder::class);
        $this->call(ClubSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CarSeeder::class);
        $this->call(BrandSeeder::class);
    }
}
