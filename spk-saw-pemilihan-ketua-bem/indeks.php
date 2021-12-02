<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

    <body>
        <div id="app">
            <?php require "layout/sidebar.php";?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Home</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sistem Pendukung Keputusan Pemilihan Ketua Badan Eksekutif Mahasiswa (BEM)</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        Sistem Pendukung Keputusan (SPK) yang dibangun berperan dalam melakukan penilaian sesuai dengan kriteria yang telah ditentukan. 
                                        Diharapkan, sistem ini dapat memberikan solusi untuk menangani permasalahan yang ada. 
                                        Sistem informasi ini diperlukan untuk membantu mahasiswa dalam menentukan pilihan pada pemilihan raya sehingga tingkat keobjektifan pemilihan ketua BEM Universitas Negeri Surabaya akan semakin tinggi. 
                                        Perhitungan dilakukan berdasarkan tahapan-tahapan yang berorientasi pada keberhasilan menggunakan metode Simple Additive Weighting (SAW). 
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Tahapan Penyelesaian Metode Simple Additive Weighting (SAW) adalah sebagai berikut:
                                        </p>
                                        <ol type="1">
                                            <li>Menentukan alternatif calon kandidat ketua BEM Universitas Negeri Surabaya.</li>
                                            <li>Menentukan kriteria dan bobot masing-masing kriteria yang akan menjadi acuan dalam perhitungan.</li>
                                            <li>Menentukan bobot preferensi (W) untuk setiap kriteria.</li>
                                            <li>Menentukan rating kecocokan dari masing-masing kriteria.</li>
                                            <li>Memasukkan nilai transformasi ke dalam matriks X yang merupakan nilai dari hasil tabel rating kecocokan kriteria.</li>
                                            <li>Melakukan normalisasi (R) matriks keputusan X berdasarkan rumus sesuai dengan tipe kriteria.</li>
                                            <li>Melakukan perangkingan dengan menjumlahkan setiap alternatif dari matriks ternormalisasi R setiap baris dikalikan bobot preferensi W.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require "layout/footer.php";?>
            </div>
        </div>
        <?php require "layout/js.php";?>
    </body>

</html>