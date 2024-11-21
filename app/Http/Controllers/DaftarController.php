<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Hasil;

use Barryvdh\DomPDF\PDF;
use App\Models\BiodataOrtu;
use App\Models\PesertaPPDB;
use App\Models\JenisKelamin;
use Illuminate\Http\Request;
use App\Models\PekerjaanOrangtua;
use Illuminate\Support\Facades\DB;
use App\Models\PenghasilanOrangtua;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agama = Agama::all();
        $jenkel = JenisKelamin::all();
        $pekerjaan_ortu = PekerjaanOrangtua::all();
        return view('pages.user-flow.pendaftaran', compact(
            'agama', 'jenkel', 'pekerjaan_ortu'
        ));
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'id_jenis_kelamin' => 'required|exists:tbl_jenis_kelamin,id',
            'id_agama' => 'required|exists:tbl_agama,id',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date|before:today',
            'tempat_lahir' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'nisn' => 'required|numeric|unique:tbl_peserta_ppdb,nisn',
            'no_telp' => 'required|numeric',
            'nama_ayah' => 'required|string|max:255',
            'id_pekerjaan_ayah' => 'required|exists:tbl_pekerjaan_ortu,id',
            'penghasilan_ayah' => 'required|numeric|min:0',
            'nama_ibu' => 'required|string|max:255',
            'id_pekerjaan_ibu' => 'required|exists:tbl_pekerjaan_ortu,id',
            'penghasilan_ibu' => 'required|numeric|min:0',
            'no_telp_ortu' => 'required|numeric',
        ]);


        $peserta = PesertaPPDB::create([
            'nama' => $request->nama,
            'id_jenis_kelamin' => $request->id_jenis_kelamin,
            'id_agama' => $request->id_agama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat' => $request->alamat,
            'nisn' => $request->nisn,
            'no_telp' => $request->no_telp,
            'nama_ayah' => $request->nama_ayah,
            'id_pekerjaan_ayah' => $request->id_pekerjaan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'id_pekerjaan_ibu' => $request->id_pekerjaan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'no_telp_ortu' => $request->no_telp_ortu,
        ]);

        $peserta->orang_tua()->create([
            'nama_ayah' => $request->nama_ayah,
            'id_pekerjaan_ayah' => $request->id_pekerjaan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'id_pekerjaan_ibu' => $request->id_pekerjaan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'no_telp_ortu' => $request->no_telp_ortu,
        ]);

        $data3 = [
            'nis' => $peserta->id,
        ];

        $hasil = Hasil::create($data3);
        if (!$hasil) {
            DB::rollBack();
            Alert::error('Error', 'Terjadi kesalahan saat menyimpan data hasil.');
            return redirect()->back();
        }

        DB::commit();
        Alert::success('Success', 'Thank you for register!');
        return redirect()->route('landing-page');
    }

    public function hasil()
    {
        $items = Hasil::with(['peserta.orang_tua'])->get();
        return view('pages.user-flow.hasil', compact('items'));
    }

    public function download()
    {
        $items = Hasil::with(['peserta.orang_tua'])->get();
        return view('pdf.lulus', compact('items'));
    }

    // public function lulus_preview(){
    //     $items = Hasil::with(['peserta.orang_tua'])->get();
    //     return view('pdf.lulus', compact('items'));
    // }
}
