<!DOCTYPE html>
<html>
<head>
  <title>Report Aqm Data</title>

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.dataTables.min.css') ?>">
</head>
<body>
  <div class="card-header">
      <a href="<?= site_url('idstasiun/'.$idstasiun['id_stasiun']) ?>"><button>DOWNLOAD DATA</button></a>
    </div>

  <div class="card p-3">
    <div class="table-responsive">
      <table id="tablesrv" class="table">
        <thead class="thead-dark">
          <?php foreach($aqmalldata as $data) : ?>
            <?php if($idstasiun['id_stasiun'] == $data['id_stasiun']) : ?>
              <tr>
                <th>No</th>
                <th>Id Stasiun</th>
                <th>WAKTU</th>
                <?= $data['pm10'] != NULL ? '<th>PM10</th>' : ''?>
                <?= $data['pm25'] != NULL ? '<th>PM25</th>' : ''?>
                <?= $data['so2'] != NULL ? '<th>SO2</th>' : ''?>
                <?= $data['co'] != NULL ? '<th>CO</th>' : ''?>
                <?= $data['o3'] != NULL ? '<th>O3</th>' : ''?>
                <?= $data['no2'] != NULL ? '<th>NO2</th>' : ''?>
                <?= $data['hc'] != NULL ? '<th>HC</th>' : ''?>
                <?= $data['voc'] != NULL ? '<th>VOC</th>' : ''?>
                <?= $data['nh3'] != NULL ? '<th>NH3</th>' : ''?>
                <?= $data['no'] != NULL ? '<th>NO</th>' : ''?>
                <?= $data['h2s'] != NULL ? '<th>H2S</th>' : ''?>
                <?= $data['cs2'] != NULL ? '<th>CS2</th>' : ''?>
                <?= $data['ws'] != NULL ? '<th>KEC. ANGIN</th>' : ''?>
                <?= $data['wd'] != NULL ? '<th>ARAH ANGIN</th>' : ''?>
                <?= $data['humidity'] != NULL ? '<th>KELEMBABAN</th>' : ''?>
                <?= $data['temperature'] != NULL ? '<th>TEMPERATUR</th>' : ''?>
                <?= $data['pressure'] != NULL ? '<th>TEKANAN</th>' : ''?>
                <?= $data['sr'] != NULL ? '<th>SOLAR RADIASI</th>' : ''?>
                <?= $data['rain_intensity'] != NULL ? '<th>CURAH HUJAN</th>' : ''?>
              </tr>
              <?php break; ?>
            <?php endif ?>
          <?php endforeach ?>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>


  <!-- jQuery -->
  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>


  <script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/jszip.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>

  <script>
    $(document).ready(function() {
      $('#tablesrv').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
          "url" : "<?= site_url('ajax/data') ?>",
          "type" : "POST"
        },
        // "columnDefs" : [
        //   {
        //     "targets" : [6, 7],
        //     "className" : 'text-right'
        //   },
        //   {
        //     "targets" : [8],
        //     "className" : 'text-center'
        //   },
        //   {
        //     "targets" : [6, 7, 8],
        //     "orderable" : false
        //   }
        // ]
      })
    })
  </script>
</body>
</html>