<!DOCTYPE html>
<html lang="en">
  <?php
require "layout/head.php";
require "include/koneksi.php";
require "W.php";
require "R.php";
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
          <h3>Hasil Perhitungan</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4 class="card-title">Tabel Nilai Preferensi (P)</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <p class="card-text">
                    Melakukan perankingan dengan menjumlahkan setiap alternatif dari matriks ternormalisasi R setiap baris dikalikan dengan bobot preferensi W.</p>
                  </div>
                  <div class="table-responsive">
                    <table class="table caption-top mb-0">
                    <caption>
    Nilai Preferensi (P)
  </caption>
  <tr>
    <th class="table-light">No</th>
    <th class="table-light">Alternatif</th>
    <th class="table-light">Hasil</th>
  </tr>
  <?php

$P = array();
$m = count($W);
$no = 0;
foreach ($R as $i => $r) {
    for ($j = 0; $j < $m; $j++) {
        $P[$i] = (isset($P[$i]) ? $P[$i] : 0) + $r[$j] * $W[$j];
    }
    echo "<tr class='center'>
            <td>" . (++$no) . "</td>
            <td>A{$i}</td>
            <td>{$P[$i]}</td>
          </tr>";
}
?>
                    </table>
                  </div>
                  <div class="card-body">
                  <p class="hasil-perhitungan">
                    Dari perhitungan yang telah dilakukan, nilai tertinggi diperoleh oleh A2, yaitu Fabian Adam Putra. Lalu, disusul dengan A3, A4, dan A1, yakni Riani Zara Amanda, Dimas Aditya, dan Zaidan Adnan Adhitama.
                  </p>
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
