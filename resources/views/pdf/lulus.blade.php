<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Penerimaan</title>
    <style>
        /* Penyesuaian ukuran dan margin halaman A4 */
        @page {
            size: A4;
            margin: 2cm;
        }

        /* Pengaturan font dan warna dasar */
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #ffffff;
            color: #000;
            margin: 0;
            padding: 0;
        }

        /* Kontainer utama untuk memastikan konten terpusat dan rapi */
        .container {
            width: 100%;
            padding: 0;
            box-sizing: border-box;
        }

        /* Bagian header (kop surat) */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Gambar di header (logo) */
        .header img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }

        /* Teks di header (judul dan alamat) */
        .header h1 {
            font-size: 20px;
            margin: 0;
        }

        .header h2 {
            font-size: 18px;
            margin: 5px 0;
        }

        .header p {
            font-size: 14px;
            margin: 5px 0;
        }

        /* Bagian isi konten */
        .content {
            margin-top: 30px;
            font-size: 14px;
            line-height: 1.6;
        }

        .content p {
            margin: 10px 0;
        }

        /* Tabel konten untuk informasi lebih terstruktur */
        .content table {
            width: 50%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .content table td {
            vertical-align: top;
            padding: 5px;
        }

        .content table th {
            padding: 1px 2px;
            text-align: left;
            font-weight: bold;
        }

        /* Bagian footer (tanda tangan, catatan, dll.) */
        .footer {
            margin-top: 5px;
            text-align: center;
            font-size: 14px;
        }

        .footer .year {
            font-size: 14px;
        }

        /* Menambahkan spasi setelah footer */
    </style>

</head>
<body>
    <div class="container">
        <div class="header">
            <div style="display: flex; align-items: center; margin-bottom: 20px; justify-content: center;">
                <img
                    src="{{ asset('assets/img/logo_SMP_Hasanudin.png') }}" alt="Logo Yayasan"
                    style="width: 100px; height: auto; margin-right: 20px;"
                />
                <div>
                    <h1 style="font-size: 20px; margin: 0;">SMP ISLAM HASANUDDIN MOJOSARI</h1>
                    <p style="font-size: 14px; margin: 5px 0;">Jalan Hasanuddin No 44, AWANG AWANG, Kec. Mojosari, Kab. Mojokerto, Jawa Timur</p>
                </div>
            </div>
            <hr style="border: 1px solid #000; margin: 20px 0;" />
            <h2 style="font-size: 18px;">SURAT KETERANGAN PENERIMAAN</h2>
            <p style="font-size: 14px;">Nomor: -</p>
        </div>
        <div class="content">
            <p>Yang bertandatangan di bawah ini, Kepala Sekolah SMP ISLAM HASANUDDIN MOJOSARI:</p>
            <table style="width: 100%;">
                <tr>
                    <td>Nama</td>
                    <td>: Abdur Rokhim, S.Ag</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>: Kepala Sekolah</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: Jalan Hasanuddin No 44, AWANG AWANG, Kec. Mojosari, Kab. Mojokerto, Jawa Timur</td>
                </tr>
            </table>
            <p>Telah menerima pendaftaran siswa-siswi baru SMP Islam Hasanuddin Mojosari <span class="year" id="currentYear"></span>/<span class="year" id="nextYear"></span></p>
            <p>Menerangkan bahwa:</p>
            @foreach($items as $item)
                <table>
                    <tr>
                        <th>Nama</th>
                        <td>: {{ $item->peserta->nama }}</td>
                    </tr>
                    <tr>
                        <th>NIS/NISN</th>
                        <td>: {{ $item->peserta->nisn }}</td>
                    </tr>
                    <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td>: {{ $item->peserta->tempat_lahir }}, {{ \Carbon\Carbon::parse($item->peserta->tanggal_lahir)->format('d F Y') }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{ $item->peserta->jenkel->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>Asal Sekolah</td>
                        <td>: {{ $item->peserta->asal_sekolah }}</td>
                    </tr>
                </table>
            @endforeach
            <p>Dengan ini dinyatakan <strong>DITERIMA/LULUS</strong> di SMP Islam Hasanuddin Mojosari.</p>
            <p>Demikian surat pemberitahuan ini kami sampaikan. Terima kasih atas perhatian Anda.</p>
        </div>
        <div class="footer" style="margin-left: 400px; margin-right: 0; text-align: left;">
            <p style="text-align: left;">Mojokerto, <span class="year" id="currentDate"></span></p>
            <p style="text-align: left;">Dokumen ini disahkan oleh</p>
            <p style="text-align: left;">Yayasan DARUL FALAH MOJOKERTO.</p>
        </div>
    </div>
</body>
<script>
    const currentDate = new Date();
    const currentYear = new Date().getFullYear();
    const nextYear = currentYear + 1;

    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = currentDate.toLocaleDateString('id-ID', options);

    document.getElementById('currentYear').textContent = currentYear;
    document.getElementById('nextYear').textContent = nextYear;
    document.getElementById('currentDate').textContent = formattedDate;

    window.onload = function() {
        window.print();
    };

    window.onafterprint = function() {
        window.location.href = document.referrer; // Redirect to the previous page
    };
</script>
</html>
