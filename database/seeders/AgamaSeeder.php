<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Daftar agama di Indonesia
        $agama = [
            ['nama_agama' => 'Islam'],
            ['nama_agama' => 'Kristen Protestan'],
            ['nama_agama' => 'Kristen Katolik'],
            ['nama_agama' => 'Hindu'],
            ['nama_agama' => 'Buddha'],
            ['nama_agama' => 'Konghucu'],
            ['nama_agama' => 'Lainnya'],
        ];

        DB::table('tbl_agama')->insert($agama);
    }
}
