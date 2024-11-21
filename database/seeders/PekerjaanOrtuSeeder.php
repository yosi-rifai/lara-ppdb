<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanOrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pekerjaan umum untuk orang tua
        $pekerjaan = [
            ['nama_pekerjaan' => 'PNS'],
            ['nama_pekerjaan' => 'TNI/Polri'],
            ['nama_pekerjaan' => 'Guru/Dosen'],
            ['nama_pekerjaan' => 'Karyawan Swasta'],
            ['nama_pekerjaan' => 'Wirausaha'],
            ['nama_pekerjaan' => 'Petani'],
            ['nama_pekerjaan' => 'Nelayan'],
            ['nama_pekerjaan' => 'Buruh'],
            ['nama_pekerjaan' => 'Ibu Rumah Tangga'],
            ['nama_pekerjaan' => 'Lainnya'],
        ];

        // Insert data ke tabel tbl_pekerjaan_ortu
        DB::table('tbl_pekerjaan_ortu')->insert($pekerjaan);
    }
}
