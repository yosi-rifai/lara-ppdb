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
            <li class="active"><a href="#header">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#portfolio">Kegiatan Sekolah</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li class="get-started"><a href="{{ route('daftar') }}">Daftar</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <h1>Selamat Datang di SMP ISLAM HASANUDDIN</h1>
    <h2>Ayo Kita Belajar Bersama</h2>
    <a href="{{ route('daftar') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container">

        <div class="row content">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img/Foto_bersama.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
                <b>SMP Islam Hasanuddin</b>, dengan visi melahirkan generasi Qur'ani, merupakan pilihan ideal bagi orang tua yang ingin putra-putrinya tumbuh menjadi generasi muda yang religius, berilmu, dan berakhlak mulia.
            </p>
            <p>
                Dilengkapi dengan fasilitas yang memadai dan lingkungan belajar yang nyaman, SMP Islam Hasanuddin di Mojokerto, Jawa Timur, memberikan kesempatan bagi siswa untuk mengembangkan potensi diri secara optimal.
                Dengan prestasi akademik yang membanggakan dan berbagai kegiatan ekstrakurikuler yang menarik, SMP Islam Hasanuddin telah membuktikan diri sebagai lembaga pendidikan yang berkualitas dan mampu mencetak generasi penerus bangsa yang unggul.
            </p>
        </div>
        </div>

    </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
            <h3>Kenapa Memilih Sekolah Ini?</h3>
            <p>
                SMP Islam Hasanuddin di Mojokerto, Jawa Timur, adalah sekolah swasta berakreditasi B yang berdiri sejak 2007. Dengan luas 17.088 m² dan fasilitas modern, sekolah ini mengusung visi mencetak generasi Qur'ani yang berakhlak mulia, berilmu, dan berdaya saing. SMP Islam Hasanuddin fokus pada pendidikan berkualitas berbasis nilai-nilai Islam, pembinaan akhlak, dan pengembangan potensi siswa dalam lingkungan belajar yang kondusif. Sekolah ini menjadi pilihan tepat bagi orang tua yang menginginkan pendidikan yang memadukan kualitas akademik dan pembentukan karakter.
            </p>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                    <!-- Program Tahfidzul Qur'an -->
                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-book"></i>
                            <h4>Program Tahfidzul Qur'an</h4>
                            <p>Memberikan pembelajaran hafalan Al-Qur'an yang terstruktur dan bimbingan intensif untuk mendukung pembentukan generasi Qur'ani.</p>
                        </div>
                    </div>

                    <!-- Asrama Pondok Pesantren -->
                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-home-alt"></i>
                            <h4>Asrama Pondok Pesantren</h4>
                            <p>Fasilitas asrama modern dengan lingkungan Islami yang mendukung pembelajaran agama dan pendidikan karakter selama 24 jam.</p>
                        </div>
                    </div>

                    <!-- Antar Jemput -->
                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-bus"></i>
                            <h4>Layanan Antar Jemput</h4>
                            <p>Disediakan armada antar jemput untuk memudahkan akses siswa ke sekolah dengan aman dan nyaman.</p>
                        </div>
                    </div>
                </div>
            </div><!-- End .content-->
        </div>

        </div>

    </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services section-bg">
    <div class="container">

        <div class="row">
        <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
            <h2>Fasilitas</h2>
            <p>Fasilitas belajar merupakan sarana dan prasarana pembelajaran. Prasarana meliputi kantin, ruang belajar, lapangan olahraga, LAB Komputer, dll.</p>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{asset('assets/img/kantin.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('assets/img/kelas.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{asset('assets/img/lab komputer.jpeg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{asset('assets/img/lpangan.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            </div>
        </div>
        </div>

    </div> --}}
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-left">
        <h2>Prestasi</h2>
        <p>Dibawah ini adalah bukti dokumentasi prestasi yang didapatkan oleh sekolah kami :</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-sekolah">Akademik</li>
            <li data-filter=".filter-ekstra">Ekstra Kulikuler</li>
            </ul>
        </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Sekolah_Upacara.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Upacara Bendera</h4>
                <p>Kegiatan Wajib Hari Senin untuk Upacara Bendera memperingati jasa para pahlawan</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Sekolah_Upacara.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Sekolah_Belajar-Mengajar.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Belajar Mengajar</h4>
                <p>Kegiatan pembelajaran yang menggunakan ruang kelas SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Sekolah_Belajar-Mengajar.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Sekolah_Kelompok-Belajar.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Belajar Kelompok</h4>
                <p>Kegiatan pembelajaran yang menggunakan ruang kelas SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Sekolah_Kelompok-Belajar.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Sekolah_Perpus.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Perpus SMPI Hasanuddin</h4>
                <p>Kegiatan baca membaca / literasi yang bertempat di perpus SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Sekolah_Perpus.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Sekolah_Penelitian.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Penelitian SMPI Hasanuddin</h4>
                <p>Kegiatan meneliti yang bertempat di perpus SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Sekolah_Penelitian.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Sekolah_Penelitian.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Penelitian SMPI Hasanuddin</h4>
                <p>Kegiatan meneliti yang bertempat di perpus SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Sekolah_Penelitian.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-ekstra">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Ekstra_drum-band.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Ekstrakulikuler Drum Band</h4>
                <p>Kegiatan Ekstra Kulikuler Drum Band yang bertempat di SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Ekstra_drum-band.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-ekstra">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Ekstra_Outing_Class.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Ekstrakulikuler Outing Class</h4>
                <p>Kegiatan Ekstra Kulikuler Outing Class yang bertempat di SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Ekstra_Outing_Class.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-ekstra">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Ekstra_paskibra.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Ekstrakulikuler PASKIBRA</h4>
                <p>Kegiatan Ekstra Kulikuler Paskriba / Pasukan Pengibar Bendera yang bertempat di SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Ekstra_paskibra.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-ekstra">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SMPI/Ekstra_Pramuka.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Ekstrakulikuler Pramuka</h4>
                <p>Kegiatan Ekstra Kulikuler Pramuka yang bertempat di SMPI Hasanuddin</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SMPI/Ekstra_Pramuka.png')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
    <div class="container">

        {{-- <div class="row">
            <div class="col-lg-4">
                <div class="section-title" data-aos="fade-right">
                <h2>Pendiri Sekolah</h2>
                <p>Para pendiri sekolah yang berasal dari latar belakang berbeda namun bisa satu tujuan</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">

                <div class="col-lg-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="{{asset('assets/img/team/team-1.png')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Ghibran Aryasena</h4>
                        <span>Pendiri</span>
                        <p>Saya ingin mempersekolahkan orang lain dengan biaya murah</p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="{{asset('assets/img/team/team-2.png')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Marcelino Stevenson</h4>
                        <span>Pendiri</span>
                        <p>Meningkatkan kreativitas untuk mencerdaskan generasi bangsa</p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="{{asset('assets/img/team/team-3.png')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Mahesa Fikri Firdaus</h4>
                        <span>Pendiri</span>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pic"><img src="{{asset('assets/img/team/team-4.png')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>M Adi Siswanto</h4>
                        <span>Pendiri</span>
                        <p>Break, the limits!</p>
                    </div>
                    </div>
                </div>

                </div>

            </div>
        </div> --}}

    </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">
        <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
            <h2>Kontak</h2>
            <p>Untuk info lebih lanjut bisa menghubungi kontak yang tercantum.</p>
            </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            {{-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.376731341821!2d106.57269601532305!3d-6.345235495408159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e34f7d4a90d7%3A0x507976b9b6d16e2a!2sJafra%20Parung%20Panjang!5e0!3m2!1sid!2sid!4v1616331876465!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe> --}}
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.4229683565504!2d112.55315287411634!3d-7.528759774300968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7874cf5db1ef9d%3A0xe4017392d2f8e62!2sSMP%20Islam%20Hasanuddin!5e0!3m2!1sid!2sid!4v1731979256660!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="info mt-4">
            <i class="icofont-google-map"></i>
            <h4>Alamat :</h4>
            <p>Jalan Hasanuddin No 44, AWANG AWANG, Kec. Mojosari, Kab. Mojokerto, Jawa Timur</p>
            </div>
            <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="info">
                <i class="icofont-envelope"></i>
                <h4>Email :</h4>
                <p>smpi.hasanuddinrokhim44@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info w-100 mt-4">
                <i class="icofont-phone"></i>
                <h4>Contact Person :</h4>
                <p>Bu Erma : 0856 5542 9841</p>
                <p>Bu Khanifah : 0857 3212 1210</p>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection
