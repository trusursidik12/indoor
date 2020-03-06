<!DOCTYPE html>
<html>
<?php
$celcius = '28';
 
$dataPointsGresikTek01 = array(
  array("label"=> "PM10", "y"=> 100),
  array("label"=> "SO2", "y"=> 11),
  array("label"=> "CO", "y"=> 120),
  array("label"=> "O3", "y"=> 120),
  array("label"=> "NO2", "y"=> 120)
);
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GRESIK TEK 01</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/sidik.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body>

  <div class="card p-3" style="margin-top: 100px;">
    <div class="d-flex">
      <div class="col-sm-2 text-center" style="padding-top: 40px;">
        <table>
          <tr class="bg-dark">
            <td> > 300 <br> BERBAHAYA</td>
          </tr>
          <tr class="bg-danger">
            <td height="80"> 200 - 299 <br> SANGAT TIDAK SEHAT</td>
          </tr>
          <tr class="bg-warning">
            <td height="80"> 101 - 199 <br> TIDAK SEHAT</td>
          </tr>
          <tr class="bg-primary">
            <td> 51 - 100 <br> SEDANG</td>
          </tr>
          <tr class="bg-success">
            <td> 1 - 50 <br> BAIK</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-8">
        <div id="chartContainerRum" style="height: 370px; width: 100%;"></div>        
      </div>
      <div class="col-sm-2">
        <div class="row justify-content-center">
          <div class="col-sm">
            <div class="card text-center p-1 bg-info">
            <h3 style="font-size: 14px;"><b>TEKANAN</b></h3>
            <div class="card m-1 bg-info">
              <h1><b>200</b></h1>
            </div>
          </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm">
          <div class="card text-center p-1 bg-info">
            <h3 style="font-size: 14px;"><b>KELEMBABAN</b></h3>
            <div class="card m-1 bg-info">
              <h1><b>200</b></h1>
            </div>
          </div>            
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm"><div class="card text-center p-1 bg-info">
            <h3 style="font-size: 14px;"><b>SUHU</b></h3>
            <div class="card m-1 bg-info">
              <h1><b>200</b></h1>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>


<!-- chart -->
<script type="text/javascript" src="<?= base_url('assets/dist/js/chartjs.js') ?>"></script>

<script>
  window.onload = function () {

  CanvasJS.addColorSet("greenShades",
              [
              "#00eaff"               
              ]);
   
  var chartrum = new CanvasJS.Chart("chartContainerRum", {
    // legend :{
      dataPointMaxWidth: 600,
      title:{
        text : "GRESIK TEK 01"
      },
    // },
    animationEnabled : true,
    colorSet: "greenShades",
    axisY: {
      minimum: 0,
      interval: 50,
      maximum: 350
    },
    data: [{
      type: "column",
      // yValueFormatString: "#,##0.00\"%\"",
      indexLabel: "{y}",
      dataPoints: <?php echo json_encode($dataPointsGresikTek01, JSON_NUMERIC_CHECK); ?>
    }]
  });
  chartrum.render();

}




</script>
</body>
</html>
