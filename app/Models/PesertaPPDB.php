<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaPPDB extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'nama',
        'id_jenis_kelamin',
        'id_agama',
        'tanggal_lahir',
        'tempat_lahir',
        'asal_sekolah',
        'alamat',
        'nisn',
        'no_telp',
        'nama_ayah',
        'id_pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'id_pekerjaan_ibu',
        'penghasilan_ibu',
    ];

    protected $table = "tbl_peserta_ppdb";

    public function orang_tua()
    {
        return $this->hasOne(BiodataOrtu::class, 'id_peserta_ppdb','id');
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'id_agama');
    }

    public function jenkel()
    {
        return $this->belongsTo(JenisKelamin::class, 'id_jenis_kelamin');
    }

    public function pekerjaanAyah()
    {
        return $this->belongsTo(PekerjaanOrtu::class, 'id_pekerjaan_ayah');
    }

    public function pekerjaanIbu()
    {
        return $this->belongsTo(PekerjaanOrtu::class, 'id_pekerjaan_ibu');
    }
}
