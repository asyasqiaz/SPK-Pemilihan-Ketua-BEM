<!DOCTYPE html>
<html lang="en">
  <?php
require "layout/head.php";
require "include/koneksi.php";
?>

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
          <h3>Sub Kriteria</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4 class="card-title">Tabel Sub Kriteria</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <p class="card-text">Penilaian 5 sub kriteria, yaitu Indeks Prestasi Kumulatif (IPK), keaktifan organisasi, visi dan misi, debat, dan prestasi lomba akademik atau non akademik.</p>
                  </div>

                  <div class="tabel-subkriteria-1">
                    <table class="table caption-top mb-4">
                    <caption>
                        Tabel Sub Kriteria Indeks Prestasi Kumulatif (IPK)
                    </caption>
                    <tr>
                        <th class="table-light" width="400px">Kriteria</th>
                        <th class="table-light" width="200px">Range</th>
                        <th class="table-light" width="200px">Bobot</th>
                    </tr>
                    
                        <tr>

                        <td rowspan="5">Indeks Prestasi Kumulatif (IPK)</td>
                            <tr>
                                <td>3,00 < 3,25</td>
                                <td>0,5</td>
                            </tr>
                            <tr>
                                <td>3,25 < 3,50</td>
                                <td>0,6</td>
                            </tr>
                            <tr>
                                <td>3,50 < 3,75</td>
                                <td>0,8</td>
                            </tr>
                            <tr>
                                <td>3,75 <= 4,00</td>
                                <td>1</td>
                            </tr>

                        </tr>

                    </table>
                  </div>

                  <div class="tabel-subkriteria-2">
                    <table class="table caption-top mb-4">
                    <caption>
                        Tabel Sub Kriteria Keaktifan Organisasi
                    </caption>
                    <tr>
                        <th class="table-light" width="400px">Kriteria</th>
                        <th class="table-light" width="200px">Range</th>
                        <th class="table-light" width="200px">Bobot</th>
                    </tr>
                    
                        <tr>

                        <td rowspan="5">Keaktifan Organisasi</td>
                            <tr>
                                <td>Kurang aktif</td>
                                <td>0,5</td>
                            </tr>
                            <tr>
                                <td>Cukup</td>
                                <td>0,7</td>
                            </tr>
                            <tr>
                                <td>Aktif</td>
                                <td>0,9</td>
                            </tr>
                            <tr>
                                <td>Sangat aktif</td>
                                <td>1</td>
                            </tr>

                        </tr>

                    </table>
                  </div>

                  <div class="tabel-subkriteria-3">
                    <table class="table caption-top mb-4">
                    <caption>
                        Tabel Sub Kriteria Visi dan Misi
                    </caption>
                    <tr>
                        <th class="table-light" width="400px">Kriteria</th>
                        <th class="table-light" width="200px">Range</th>
                        <th class="table-light" width="200px">Bobot</th>
                    </tr>
                    
                        <tr>

                        <td rowspan="5">Visi dan Misi</td>
                            <tr>
                                <td>Kurang</td>
                                <td>0,4</td>
                            </tr>
                            <tr>
                                <td>Cukup</td>
                                <td>0,6</td>
                            </tr>
                            <tr>
                                <td>Baik</td>
                                <td>0,8</td>
                            </tr>
                            <tr>
                                <td>Sangat baik</td>
                                <td>1</td>
                            </tr>

                        </tr>

                    </table>
                  </div>

                  <div class="tabel-subkriteria-4">
                    <table class="table caption-top mb-4">
                    <caption>
                        Tabel Sub Kriteria Debat
                    </caption>
                    <tr>
                        <th class="table-light" width="400px">Kriteria</th>
                        <th class="table-light" width="200px">Range</th>
                        <th class="table-light" width="200px">Bobot</th>
                    </tr>
                    
                        <tr>

                        <td rowspan="5">Debat</td>
                            <tr>
                                <td>Kurang</td>
                                <td>0,4</td>
                            </tr>
                            <tr>
                                <td>Cukup</td>
                                <td>0,6</td>
                            </tr>
                            <tr>
                                <td>Baik</td>
                                <td>0,8</td>
                            </tr>
                            <tr>
                                <td>Sangat baik</td>
                                <td>1</td>
                            </tr>

                        </tr>

                    </table>
                  </div>

                  <div class="tabel-subkriteria-5">
                    <table class="table caption-top mb-4">
                    <caption>
                        Tabel Sub Kriteria Prestasi Lomba Akademik atau Non Akademik
                    </caption>
                    <tr>
                        <th class="table-light" width="400px">Kriteria</th>
                        <th class="table-light" width="200px">Range</th>
                        <th class="table-light" width="200px">Bobot</th>
                    </tr>
                    
                        <tr>

                        <td rowspan="5">Prestasi Lomba Akademik atau Non Akademik</td>
                            <tr>
                                <td>1 Piagam</td>
                                <td>0,5</td>
                            </tr>
                            <tr>
                                <td>2 Piagam</td>
                                <td>0,7</td>
                            </tr>
                            <tr>
                                <td>3 Piagam</td>
                                <td>0,9</td>
                            </tr>
                            <tr>
                                <td>4 Piagam atau lebih</td>
                                <td>1</td>
                            </tr>

                        </tr>

                    </table>
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