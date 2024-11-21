@extends('pages.home.index')
@push('add-styles')
<link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
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
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Orang Tua</th>
                                <th>NISN</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Orang Tua</th>
                                <th>NISN</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i=1 ?>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$item->peserta->nama}}</td>
                                <td>{{$item->peserta->asal_sekolah}}</td>
                                <td>{{ $item->peserta->orang_tua->nama_ayah }} & {{ $item->peserta->orang_tua->nama_ibu }}</td>
                                <td>{{$item->peserta->nisn}}</td>
                                <td>
                                    @if ($item->status == 'MENUNGGU')
                                        <div class="font-weight-bold text-warning">MENUNGGU</div>
                                    @endif
                                    @if ($item->status == 'DITOLAK')
                                        <div class="font-weight-bold text-danger">DITOLAK</div>
                                    @endif
                                    @if ($item->status == 'DITERIMA')
                                        <div class="font-weight-bold text-success">DITERIMA</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status == 'DITERIMA')
                                        <form method="get" class="d-inline-block" action="{{ route('download-hasil') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-success mr-2">
                                                Download
                                            </button>
                                        </form>
                                    @else
                                        <button type="submit" class="btn btn-secondary mr-2" disabled>
                                            Download
                                        </button>
                                    @endif
                                </td>

                            </tr>
                            <?php $i++; ?>
                            @empty
                                <tr class="text-center">
                                    <td colspan="8"> Tidak Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End #main -->
@endsection
@push('add-scripts')
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endpush
