<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenghasilanOrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data rentang penghasilan umum
        $penghasilan = [
            ['penghasilan_ortu' => '<1.000.000'],
            ['penghasilan_ortu' => '1.000.000 - 2.000.000'],
            ['penghasilan_ortu' => '2.000.001 - 3.000.000'],
            ['penghasilan_ortu' => '3.000.001 - 5.000.000'],
            ['penghasilan_ortu' => '>5.000.000'],
        ];

        // Insert data ke tabel tbl_penghasilan_ortu
        DB::table('tbl_penghasilan_ortu')->insert($penghasilan);
    }
}
