<!doctype html>
<html lang="en">

<head>
    @include ('template.headinfo')
</head>
    
<body>
    <nav>
        @include('template.navlogout')
    </nav>

    <div class="utama">
        <h1>Badan Eksekutif Mahasiswa<br> FMIPA USK</h1>
        <br>
        <div class="scrolld">
            <a class="scroll" href="#kolomdaftar" role="button">Jadi Anggota
                Sekarang!<i class="fas fa-angle-double-down kebawah"></i></a></button>
        </div>
    </div>

    <div class="container">
        <section>
            <h3>Perkenalan</h3>
            <h1>Apa Itu Badan Eksekutif<br>Mahasiswa?</h1>
            <p>&nbsp Badan eksekutif mahasiswa adalah organisasi mahasiswa intra kampus yang merupakan lembaga eksekutif
                di
                tingkat pendidikan tinggi yang dipimpin oleh seorang Presiden Mahasiswa.</p>

            <!-- untuk foto -->
            <div class="foto">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade foto2" data-bs-ride="carousel">
                    <div class="carousel-indicators foto3">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- listdaftar -->
            <div class="internalbem">
                <h3>Internal</h3>
                <h1>Departemen Badan Eksekutif Mahasiswa FMIPA</h1>
                <p>&nbsp Dalam melaksanakan program-programnya, umumnya BEM memiliki beberapa kementerian dan departemen
                    atau
                    bidang.</p>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Departemen Pengembangan Sumber Daya Mahasiswa (PSDM)
                        <br>Departemen PSDM adalah departemen yang berhubungan dengan proses pegkaderan dan pengembangan
                        mahasiswa serta mengambil peran dan tanggung jawab untuk menggali, mengoptimalisasi dan membina
                        sumber daya mahasiswa agar dapat mengaktualisasikan peran dan fungsinyasebagai mahasiswa yang
                        ada di Fakultas Matematika dan Ilmu Pengetahuan Alam. Departemen PSDM memiliki 2 divisi, yaitu
                        Divisi Pengembangan Olahraga & seni (Porseni) dan Divisi Pelatihan dan Pengembangan (Litbang).
                    </li>
                    <li class="list-group-item"> Departemen Sosial Masyarakat (Sosmas) <br>
                        Departemen Sosial Masyarakat adalah departemen yang memiliki sekelompok orang saling
                        berinteraksi dalam menggambarkan atau menciptakan norma-norma yang berkembang di masarakat.
                        Fungsi Departemen Sosial Masyarakat adalah sebagai wadah kreasi aktivis mahasiswa dalam
                        menyalurkan kegiatan pergerakan dalam bidang kepedulian social kemasyrakatan. Diantaranya adalah
                        penanggulangan becana, kepedulian terhadap lingkungan dan antar makhluk sosial. Departemen
                        Sosmas memiliki 2 divisi, yaitu Divisi Lingkungan dan Divisi Pengabdian Masyarakat (Pengmas).
                    </li>
                    <li class="list-group-item"> Departemen Kesejahteraan Mahasiswa (Kesma)<br>
                        Departemen Kesma bergerak di bidang pelayanan dan kesejateraan mahasiswa Fakultas Matematika dan
                        Ilmu Pengetahuan Alam Unsyiah. Fungsi dan tugasnya adalah memberikan informasi mengenai
                        pelayanan dan kesejahteraan mahasiswa, seperti beasiswa, perlombaan dan lain-lain. Departement
                        Kesma memiliki 2 divisi, yaitu Divisi Aspirasi Mahasiswa (Asmas) dan Divisi Pelayanan Mahasiswa
                        (Pelmas).</li>
                    <li class="list-group-item">Departemen Hubungan Antar Lembaga (Hual)<br>
                        Departemen Hual merupakan departemen yang bertugas untuk menjalin hubungan baik dengan
                        lembaga-lembaga yang berada di dalam maupun di luar lingkup FMIPA Unysiah serta lembaga di luar
                        kampus Unsyiah. Dalam kegiatannya, departemen ini akan memberikan pengalaman bertemu dan
                        berkomnikasi untuk menjalin hubungan baik dengan berbagai macam lembaga. Kemampuan berkomunikasi
                        yang baik diperlukan untuk mencapai keterjalinan hubungan yang baik tersebut. Departemen Hual
                        memiliki 2 divisi, yaitu Divisi Internal dan Divisi Eksternal.</li>
                    <li class="list-group-item">Departemen Pemberdayaan Perempuan (PP)<br>
                        Departemen Pemberdayaan Perempuan merupakan suatu bagian dalam Badan Eksekutif Mahasiswa
                        Fakultas Matematika dan ILmu Pengetahuan Alam Universitas Syiah Kuala yang berusaha untuk
                        meningkatkan potensi perempuan secara umum dengan pengembangan kreativitas dan hubungan baik
                        antar mahasiswi di Fakultas MIPA.</li>
                    <li class="list-group-item">Departemen Kesekretariatan BEM (Kesbem)<br>
                        Departemen Kesbem merupakan pengelola dan penganggung jawab serta mengatur alur internal dan
                        eksternal BEM seperti menyelenggarakan pembinaan ketatausahaan, khususnya yang berhubungan
                        dengan tugas surat-menyurat yag meliputi perencanaan, pembuatan, penerimaan, pencatatan,
                        pengolahan, pendisposisian, penndistribusian dan penyimpanan surat. Selain itu Kesbem juga
                        menyelenggarakan tata hubungan komunikasi secara internal organisasi serta menyelenggarakan
                        pertemuan dan rapat evaluasi. Menata arsip dokumen, mengatur jadwal acara dan menyiapkan
                        pembuatan laporan kegiatan juga merupakan tanggung jawab Kesbem.
                    </li>
                    <li class="list-group-item">Departemen Komunikasi dan Informasi (Kominfo)<br>
                        Departemen Kominfo adalah departemen yang bertanggungjawab dalam pengumpulan informasi sebagai
                        inputnya, pemeliharaan , serta penyebarluasan informasi sebagai outputnya. Departemen ini
                        merupakan bagian penting dalam keberlangsungan BEM dalam mengkomunikasikan informasi baik
                        terhadapinternal BEM maupun kalangan mahasiswa, khusunya mahasiswa FMIPA Unysiah. Departemen
                        Kominfo memiliki 3 divisi, yaitu Divisi Desain, Divisi Medsos, dan Divisi Pers.
                    </li>
                    <li class="list-group-item">Departemen Kajian, Aksi dan Strategis (Kastrat)<br>
                        Departemen Kastrat merupakan departemen yang hadir dengan tujuan untuk mengembangkan daya
                        kritis, daya nalar, dan kepedulian mahasiswa terhadap isu-isu internal maupun eksternal.
                        Departemen Kastrat BEM FMIPA USK bergerak sebagai penggerak roda intelektual melalui kajian,
                        diskusi, informasi, dan propaganda kreatif yang memiliki daya saing tinggi di Indonesia.
                        Departemen ini menjalankan fungsi pergerakan mahasiswa melalui pelaksanaan advokasi sosial
                        secara inklusif, aspiratif, dan imparsial terhadap isu-isu sosial politik yang strategis.</li>
                </ol>
            </div>
            <section id="kolomdaftar">
                <div class="btndaftar">
                    <a href="{{route('daftar')}}" type="button" class="btn btn-link daftar" >Daftar Sekarang!</a>
                </div>
            </section>
        </section>

    </div>
    <footer>
        @include('template.footer')
    </footer>

    <!-- Modal -->
    @include('template.modal')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>