<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data jenis kelamin secara umum
        $jenisKelamin = [
            ['jenis_kelamin' => 'Laki-laki'],
            ['jenis_kelamin' => 'Perempuan'],
        ];

        // Insert data ke tabel tbl_jenis_kelamin
        DB::table('tbl_jenis_kelamin')->insert($jenisKelamin);
    }
}
