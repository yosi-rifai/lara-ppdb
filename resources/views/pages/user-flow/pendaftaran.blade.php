@extends('pages.home.index')

@section('content')
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto" style="display: flex; align-items: center;">
            <a href="index.html">
                <img src="{{asset('assets/img/logo_SMP_Hasanudin.png')}}" alt="" class="img-fluid" style="max-height: 50px; height: auto;">
            </a>
            <h1 class="text-light" style="margin-left: 15px; margin-top:5px; font-size: 24px; line-height: 1;">
                <a href="{{ route('landing-page') }}" style="color: white; text-decoration: none;">
                    <span style="font-weight: bold;">SMPI HASANUDDIN</span>
                </a>
            </h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="{{ route('landing-page') }}">Home</a></li>
            <li><a href="{{ route('hasil') }}">Hasil Pendaftaran</a></li>
            <li class="get-started"><a href="{{ route('daftar') }}">Daftar</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>
<main id="main">
    <div class="container" style="margin-top: 150px;">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        <h2 class="text-center mt-5 mb-3">Tata Cara PPDB Online</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Daftar</h4>
                        <p>Calon peserta didik baru akses laman situs PPDB online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Memberikan Bukti Berkas</h4>
                        <p>Calon peserta didik mempersiapkan beberapa dokumen penting yang dibutuhkan untuk memverifikasi data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Verifikasi Data</h4>
                        <p>Operator akan melakukan verifikasi pengajuan akun dan berkas secara online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 d-flex">
                    <div class="card-body text-center">
                        <h4>Hasil</h4>
                        <p>Calon peserta didik baru akan mengecek apakah mereka telah lulus atau tidak di halaman <strong>"Hasil Pendaftaran"</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <h1>Biodata Calon Siswa</h1>
                <hr>
                <form action="{{ route('daftar-kirim') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="number" name="no_telp" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="id_agama" class="form-control">
                                    @forelse ($agama as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_agama }}</option>
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" class="form-control" autocomplete="off" placeholder="Masukkan NISN">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="id_jenis_kelamin" class="form-control">
                                    @forelse ($jenkel as $item)
                                        <option value="{{ $item->id }}">{{ $item->jenis_kelamin }}</option>
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <h1 class="mt-5">Biodata Orang Tua</h1>
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Orang Tua (Ayah)</label>
                                <input type="text" name="nama_ayah" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pekerjaan Ayah</label>
                                <select name="id_pekerjaan_ayah" class="form-control">
                                    @forelse ($pekerjaan_ortu as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_pekerjaan }}</option>
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penghasilan Ayah</label>
                                <input type="number" name="penghasilan_ayah" class="form-control" placeholder="Masukkan penghasilan ayah" min="0">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Orang Tua (Ibu)</label>
                                <input type="text" name="nama_ibu" class="form-control" autocomplete="off" placeholder="Masukkan nama ibu">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pekerjaan Ibu</label>
                                <select name="id_pekerjaan_ibu" class="form-control">
                                    @forelse ($pekerjaan_ortu as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_pekerjaan }}</option>
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penghasilan Ibu</label>
                                <input type="number" name="penghasilan_ibu" class="form-control" placeholder="Masukkan penghasilan ibu" min="0">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>No Telepon Wali</label>
                                <input type="number" name="no_telp_ortu" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- End #main -->
@endsection
