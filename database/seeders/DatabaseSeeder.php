<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\AgamaSeeder;
use Database\Seeders\JenisKelaminSeeder;
use Database\Seeders\PekerjaanOrtuSeeder;
use Database\Seeders\PenghasilanOrtuSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            AgamaSeeder::class,
            JenisKelaminSeeder::class,
            PekerjaanOrtuSeeder::class,
        ]);
    }
}
