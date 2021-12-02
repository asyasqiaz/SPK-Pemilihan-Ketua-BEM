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
          <h3>Kriteria & Bobot</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4 class="card-title">Tabel Kriteria & Bobot</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <p class="card-text">Penmberian bobot preferensi untuk setiap kriteria beserta jenisnya (benefit atau cost). Pada SPK ini, semua kriteria memiliki jenis benefit.</p>
                  </div>
                  <div class="table-responsive">
                    <table class="table caption-top mb-0">
                    <caption>
    Tabel Kriteria C<sub>i</sub>
  </caption>
  <tr>
    <th class="table-light">No</th>
    <th class="table-light">Simbol</th>
    <th class="table-light">Kriteria</th>
    <th class="table-light">Bobot</th>
    <th class="table-light" colspan="2">Jenis</th>
  </tr>
  <?php
$sql = 'SELECT id_criteria,criteria,weight,attribute FROM saw_criterias';
$result = $db->query($sql);
$i = 0;
while ($row = $result->fetch_object()) {
    echo "<tr>
        <td class='right'>" . (++$i) . "</td>
        <td class='center'>C{$i}</td>
        <td>{$row->criteria}</td>
        <td>{$row->weight}</td>
        <td>{$row->attribute}</td>
        <td>
            <a href='kriteria-bobot-edit.php?id={$row->id_criteria}' class='btn btn-info btn-sm'>Edit</a>
            </td>
      </tr>\n";
}
$result->free();
?>
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