<!DOCTYPE html>
<html>
<?php

if(!empty($solorum))
{  
  foreach($solorum as $data)
  {

    $dataPointsRum = array(
      array("label"=> 'H2S('.$data['h2s'].' μg)', "y"=> $data['h2s']),
      array("label"=> 'CS2('.$data['cs2'].' μg)', "y"=> $data['cs2'])
    );

  };
}

foreach($sologupit as $data)
  {

    $dataPointsGupit = array(
      array("label"=> 'H2S('.$data['h2s'].' μg)', "y"=> $data['h2s']),
      array("label"=> 'CS2('.$data['cs2'].' μg)', "y"=> $data['cs2'])
    );
  };

foreach($soloplesan as $data)
  {

    $dataPointsPlesan = array(
      array("label"=> 'H2S('.$data['h2s'].' μg)', "y"=> $data['h2s']),
      array("label"=> 'CS2('.$data['cs2'].' μg)', "y"=> $data['cs2'])
    );

  };
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SOLO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/sidik.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- WD -->
  <link href="<?= base_url('assets/dist/css/css/anychart.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/dist/css/css/anychart2.css'); ?>" rel="stylesheet" type="text/css">
  <style>
    html, body, div, section, div, #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}</style>
</head>
<body>
  <div class="" style="margin: 10px">
    <!-- Main content -->
    <section class="content">

      <a href="<?= site_url('export') ?>"><button>Download Data</button></a>

      <!-- Default box -->
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch card-width">
              <div class="card bg-light" height="100%">
                

                  <!-- /.card -->
                  <div class="card-header border-bottom-0 text-center text-bold text-dark">
                    SOLO RUM
                  </div>
                  <div width="100%" class="card-body p-0" style="">
                    <div class="d-md-flex" height="100">
                      <div class="table table-responsive">
                        <table style="text-align: center; color: white; text-shadow: 2px 2px 4px #000000;">                      
                          <tr>
                            <td height="68">&nbsp;</td>
                            <td colspan="6" width="100%">
                              <div style="margin-top: 25px" id="chartContainerRum"></div>
                            </td>
                          </tr>
                          <tr>
                            <td width="100" height="" class="color-td-black hr-bottom">BAHAYA<br>( > 1.500.000)</td>
                          </tr>
                          <tr>
                            <td style="padding:-20px" valign="top" height="" class="color-td-red hr-bottom">SANGAT&nbsp;TDK&nbsp;SEHAT<br>(300.001&nbsp;-&nbsp;1.500.000)</td>
                          </tr>
                          <tr>
                            <td valign="top" height="" class="color-td-yellow hr-bottom"><a style="color: black">TIDAK SEHAT<br>(75.001&nbsp;-&nbsp;300.000)</a></td>
                          </tr>
                          <tr>
                            <td height="" class="color-td-blue hr-bottom">SEDANG<br>(15.001&nbsp;-&nbsp;75.000)</td>
                          </tr>
                          <tr>
                            <td height="" class="color-td-green hr-bottom"><a style="color: black">BAIK<br>(0&nbsp;-&nbsp;15.000)</a></td>
                          </tr>
                        </table>
                        <hr class="hr-bottom2">
                        <hr width="50" style="position: relative; border: 8px solid white; margin-top: -42px; margin-left: 190px; margin-bottom: 30px">
                      </div>
                    </div>
                  </div>

                  <div class="card-footer" style="background-color: white; margin-top: -60px;">
                    <div id="container"></div>
                    <hr>
                    <div class="text-right">
                      <a href="#" class="btn btn-sm">
                        <div class="container">
                          <img width="80%" src="<?= base_url('assets/dist/img/bg_white.png') ?>" alt="Snow">
                        </div>
                      </a>
                    </div>
                  </div>

              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch card-width">
              <div class="card bg-light">

                  <!-- /.card -->
                  <div class="card-header border-bottom-0 text-center text-bold text-dark">
                    SOLO GUPIT
                  </div>
                  <div width="100%" class="card-body p-0" style="">
                    <div class="d-md-flex" height="100">
                      <div class="table table-responsive">
                        <table style="text-align: center; color: white; text-shadow: 2px 2px 4px #000000;">                      
                          <tr>
                            <td height="68">&nbsp;</td>
                            <td colspan="6" width="100%">
                              <div style="margin-top: 25px" id="chartContainerGupit"></div>
                            </td>
                          </tr>
                          <tr>
                            <td width="100" height="" class="color-td-black hr-bottom">BAHAYA<br>( > 1.500.000)</td>
                          </tr>
                          <tr>
                            <td style="padding:-20px" valign="top" height="" class="color-td-red hr-bottom">SANGAT&nbsp;TDK&nbsp;SEHAT<br>(300.001&nbsp;-&nbsp;1.500.000)</td>
                          </tr>
                          <tr>
                            <td valign="top" height="" class="color-td-yellow hr-bottom"><a style="color: black">TIDAK SEHAT<br>(75.001&nbsp;-&nbsp;300.000)</a></td>
                          </tr>
                          <tr>
                            <td height="" class="color-td-blue hr-bottom">SEDANG<br>(15.001&nbsp;-&nbsp;75.000)</td>
                          </tr>
                          <tr>
                            <td height="" class="color-td-green hr-bottom"><a style="color: black">BAIK<br>(0&nbsp;-&nbsp;15.000)</a></td>
                          </tr>
                        </table>
                        <hr class="hr-bottom2">
                        <hr width="50" style="position: relative; border: 8px solid white; margin-top: -42px; margin-left: 190px; margin-bottom: 30px">
                      </div>
                    </div>
                  </div>

                  <div class="card-footer" style="background-color: white; margin-top: -60px">
                    <div id="container2"></div>
                    <hr>
                    <div class="text-right">
                      <a href="#" class="btn btn-sm">
                        <div class="container">
                          <img width="80%" src="<?= base_url('assets/dist/img/bg_white.png') ?>" alt="Snow">
                        </div>
                      </a>
                    </div>
                  </div>                

              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch card-width">
              <div class="card bg-light">

                  <!-- /.card -->
                  <div class="card-header border-bottom-0 text-center text-bold text-dark">
                    SOLO PLESAN
                  </div>
                  <div width="100%" class="card-body p-0" style="">
                    <div class="d-md-flex" height="100">
                      <div class="table table-responsive">
                        <table style="text-align: center; color: white; text-shadow: 2px 2px 4px #000000;">                      
                          <tr>
                            <td height="68">&nbsp;</td>
                            <td colspan="6" width="100%">
                              <div style="margin-top: 25px" id="chartContainerPlesan"></div>
                            </td>
                          </tr>
                          <tr>
                            <td width="100" height="" class="color-td-black hr-bottom">BAHAYA<br>( > 1.500.000)</td>
                          </tr>
                          <tr>
                            <td style="padding:-20px" valign="top" height="" class="color-td-red hr-bottom">SANGAT&nbsp;TDK&nbsp;SEHAT<br>(300.001&nbsp;-&nbsp;1.500.000)</td>
                          </tr>
                          <tr>
                            <td valign="top" height="" class="color-td-yellow hr-bottom"><a style="color: black">TIDAK SEHAT<br>(75.001&nbsp;-&nbsp;300.000)</a></td>
                          </tr>
                          <tr>
                            <td height="" class="color-td-blue hr-bottom">SEDANG<br>(15.001&nbsp;-&nbsp;75.000)</td>
                          </tr>
                          <tr>
                            <td height="" class="color-td-green hr-bottom"><a style="color: black">BAIK<br>(0&nbsp;-&nbsp;15.000)</a></td>
                          </tr>
                        </table>
                        <hr class="hr-bottom2">
                        <hr width="50" style="position: relative; border: 8px solid white; margin-top: -42px; margin-left: 190px; margin-bottom: 30px">
                      </div>
                    </div>
                  </div>

                  <div class="card-footer" style="background-color: white; margin-top: -60px">
                    <div id="container3"></div>
                    <hr>
                    <div class="text-right">
                      <a href="#" class="btn btn-sm">
                        <div class="container">
                          <img width="80%" src="<?= base_url('assets/dist/img/bg_white.png') ?>" alt="Snow">
                        </div>
                      </a>
                    </div>
                  </div>

              </div>
            </div>

          </div>
      <!-- end Default box -->

    </section>
    <!-- /.content -->
  </div>

<!-- WD -->
<script src="<?= base_url('assets/dist/js/js/anychart.js') ?>"></script>
<script src="<?= base_url('assets/dist/js/js/anychart2.js') ?>"></script>

<!-- chart -->
<script type="text/javascript" src="<?= base_url('assets/dist/js/chartjs.js') ?>"></script>


<script>
  window.onload = function () {

  // CanvasJS.addColorSet("greenShades",
  //             [
  //             "#ff0000"
  //             ]);


  
   
  var chartrum = new CanvasJS.Chart("chartContainerRum", {
    // legend :{
      dataPointMaxWidth: 600,
      title:{
        text : "ISPU"
      },
    // },
    animationEnabled : true,
    colorSet: "greenShades",
    axisY: {
      minimum: 0,
      interval: 300000,
      maximum: 1500000
    },
    data: [{
      type: "column",
      // yValueFormatString: "#,##0.00\"%\"",
      indexLabel: "{y}",
      dataPoints: <?php echo json_encode($dataPointsRum, JSON_NUMERIC_CHECK); ?>
    }]
  });
  changeColor(chartrum);
  chartrum.render();
   
  function changeColor(chartrum)
  {
    for (var i = 0; i < chartrum.options.data.length; i++)
    {
      for (var j = 0; j < chartrum.options.data[i].dataPoints.length; j++)
      {
        y = chartrum.options.data[i].dataPoints[j].y;
        if (y >= 0 & y <= 15000)
          chartrum.options.data[i].dataPoints[j].color = "#00ff1e";//green
        else if (y >= 15001 & y <= 75000)
          chartrum.options.data[i].dataPoints[j].color = "#0004ff";//blue
        else if (y >= 75001 & y <= 300000)
          chartrum.options.data[i].dataPoints[j].color = "#f2ff00";//yellow
        else if (y >= 300001 & y <= 1500000)
          chartrum.options.data[i].dataPoints[j].color = "#ff1100";//red
        else if (y > 1500000)
          chartrum.options.data[i].dataPoints[j].color = "#000000";//black
      }
    }  
  }

  var chartgupit = new CanvasJS.Chart("chartContainerGupit", {
    // legend :{
      dataPointMaxWidth: 600,
      title:{
        text : "ISPU"
      },
    // },
    animationEnabled : true,
    colorSet: "greenShades",
    axisY: {
      minimum: 0,
      interval: 300000,
      maximum: 1500000
    },
    data: [{
      type: "column",
      // yValueFormatString: "#,##0.00\"%\"",
      indexLabel: "{y}",
      dataPoints: <?php echo json_encode($dataPointsGupit, JSON_NUMERIC_CHECK); ?>
    }]
  });
  changeColor(chartgupit);
  chartgupit.render();

  function changeColor(chartgupit)
  {
    for (var i = 0; i < chartgupit.options.data.length; i++)
    {
      for (var j = 0; j < chartgupit.options.data[i].dataPoints.length; j++)
      {
        y = chartrum.options.data[i].dataPoints[j].y;
        if (y >= 0 & y <= 15000)
          chartrum.options.data[i].dataPoints[j].color = "#00ff1e";//green
        else if (y >= 15001 & y <= 75000)
          chartrum.options.data[i].dataPoints[j].color = "#0004ff";//blue
        else if (y >= 75001 & y <= 300000)
          chartrum.options.data[i].dataPoints[j].color = "#f2ff00";//yellow
        else if (y >= 300001 & y <= 1500000)
          chartrum.options.data[i].dataPoints[j].color = "#ff1100";//red
        else if (y > 1500000)
          chartrum.options.data[i].dataPoints[j].color = "#000000";//black
      }
    }  
  }

  var chartplesan = new CanvasJS.Chart("chartContainerPlesan", {
      dataPointMaxWidth: 600,
      title:{
        text : "ISPU"
      },
    animationEnabled : true,
    colorSet: "greenShades",
    axisY: {
      color: 'red',
      minimum: 0,
      interval: 300000,
      maximum: 1500000
    },
    data: [{
      type: "column",
      // yValueFormatString: "#,##0.00\"%\"",
      indexLabel: "{y}",
      dataPoints: <?php echo json_encode($dataPointsPlesan, JSON_NUMERIC_CHECK); ?>
    }]
  });
  changeColor(chartplesan);
  chartplesan.render();

  function changeColor(chartplesan)
  {
    for (var i = 0; i < chartplesan.options.data.length; i++)
    {
      for (var j = 0; j < chartplesan.options.data[i].dataPoints.length; j++)
      {
        y = chartrum.options.data[i].dataPoints[j].y;
        if (y >= 0 & y <= 15000)
          chartrum.options.data[i].dataPoints[j].color = "#00ff1e";//green
        else if (y >= 15001 & y <= 75000)
          chartrum.options.data[i].dataPoints[j].color = "#0004ff";//blue
        else if (y >= 75001 & y <= 300000)
          chartrum.options.data[i].dataPoints[j].color = "#f2ff00";//yellow
        else if (y >= 300001 & y <= 1500000)
          chartrum.options.data[i].dataPoints[j].color = "#ff1100";//red
        else if (y > 1500000)
          chartrum.options.data[i].dataPoints[j].color = "#000000";//black
      }
    }  
  }

}


//WD
anychart.onDocumentReady(function () {
    var gauge = anychart.gauges.circular();
    gauge.fill('#fff')
            .stroke(null)
            .padding(0)
            .margin(30)
            .startAngle(0)
            .sweepAngle(360);

    gauge.axis().labels()
            .padding(3)
            .position('outside')
            .format('{%Value}\u00B0');

    gauge.data([<?php foreach($solorum as $data) {echo $data['wd']; } ?>, <?php foreach($solorum as $data) {echo $data['ws']; } ?>]);//arah mata angin dan arah direction

    gauge.axis().scale()
            .minimum(0)
            .maximum(360)
            .ticks({interval: 30})
            .minorTicks({interval: 10});

    gauge.axis()
            .fill('#7c868e')
            .startAngle(0)
            .sweepAngle(-360)
            .width(1)
            .ticks(
                    {
                        type: 'line',
                        fill: '#7c868e',
                        length: 4,
                        position: 'outside'
                    }
            );

    gauge.axis(1)
            .fill('#7c868e')
            .startAngle(270)
            .radius(40)
            .sweepAngle(180)
            .width(1)
            .ticks(
                    {
                        type: 'line',
                        fill: '#7c868e',
                        length: 4,
                        position: 'outside'
                    }
            );

    gauge.axis(1).labels()
            .padding(3)
            .position('outside')
            .format('{%Value} m/s');

    gauge.axis(1).scale()
            .minimum(0)
            .maximum(25)
            .ticks({interval: 5})
            .minorTicks({interval: 1});

    gauge.title()
            .padding(0)
            .margin([0, 0, 10, 0]);

    gauge.marker()
            .fill('#64b5f6')
            .stroke(null)
            .size('15%')
            .zIndex(120)
            .radius('97%');

    gauge.needle()
            .fill('#1976d2')
            .stroke(null)
            .axisIndex(1)
            .startRadius('6%')
            .endRadius('38%')
            .startWidth('2%')
            .middleWidth(null)
            .endWidth('0');

    gauge.cap()
            .radius('4%')
            .fill('#1976d2')
            .enabled(true)
            .stroke(null);

    var bigTooltipTitleSettings = {
        fontFamily: "'Verdana', Helvetica, Arial, sans-serif",
        fontWeight: 'normal',
        fontSize: '12px',
        hAlign: 'left',
        fontColor: '#212121'
    };

    gauge.label()
            .text('<span style="color: #64B5F6; font-size: 13px">WD: </span>' +
                    '<span style="color: #5AA3DD; font-size: 15px">' + <?php foreach($solorum as $data) {echo $data['wd']; } ?> + '\u00B0' + '</span><br>' +
                    '<span style="color: #1976d2; font-size: 13px">WS:</span> ' +
                    '<span style="color: #166ABD; font-size: 15px">' + <?php foreach($solorum as $data) {echo $data['ws']; } ?> + 'm/s' + '</span><br>' +
                    '<span style="color: #166ABD; font-size: 20px">' + <?php foreach($solorum as $data) {echo $data['temperature']; } ?> + '\u00B0 C' + '</span>').useHtml(true)
            .textSettings(bigTooltipTitleSettings);
    gauge.label()
            .hAlign('center')
            .anchor('center-top')
            .offsetY(-20)
            .padding(15, 20)
            .background(
                    {
                        fill: '#fff',
                        stroke: {
                            thickness: 1,
                            color: '#E0F0FD'
                        }
                    }
            );

    // set container id for the chart
    gauge.container('container');

    // initiate chart drawing
    gauge.draw();
});


// WD 2
anychart.onDocumentReady(function () {
    var gauge = anychart.gauges.circular();
    gauge.fill('#fff')
            .stroke(null)
            .padding(0)
            .margin(30)
            .startAngle(0)
            .sweepAngle(360);

    gauge.axis().labels()
            .padding(3)
            .position('outside')
            .format('{%Value}\u00B0');

    gauge.data([<?php foreach($sologupit as $data) {echo $data['wd']; } ?>, <?php foreach($sologupit as $data) {echo $data['ws']; } ?>]);//arah mata angin dan arah direction

    gauge.axis().scale()
            .minimum(0)
            .maximum(360)
            .ticks({interval: 30})
            .minorTicks({interval: 10});

    gauge.axis()
            .fill('#7c868e')
            .startAngle(0)
            .sweepAngle(-360)
            .width(1)
            .ticks(
                    {
                        type: 'line',
                        fill: '#7c868e',
                        length: 4,
                        position: 'outside'
                    }
            );

    gauge.axis(1)
            .fill('#7c868e')
            .startAngle(270)
            .radius(40)
            .sweepAngle(180)
            .width(1)
            .ticks(
                    {
                        type: 'line',
                        fill: '#7c868e',
                        length: 4,
                        position: 'outside'
                    }
            );

    gauge.axis(1).labels()
            .padding(3)
            .position('outside')
            .format('{%Value} m/s');

    gauge.axis(1).scale()
            .minimum(0)
            .maximum(25)
            .ticks({interval: 5})
            .minorTicks({interval: 1});

    gauge.title()
            .padding(0)
            .margin([0, 0, 10, 0]);

    gauge.marker()
            .fill('#64b5f6')
            .stroke(null)
            .size('15%')
            .zIndex(120)
            .radius('97%');

    gauge.needle()
            .fill('#1976d2')
            .stroke(null)
            .axisIndex(1)
            .startRadius('6%')
            .endRadius('38%')
            .startWidth('2%')
            .middleWidth(null)
            .endWidth('0');

    gauge.cap()
            .radius('4%')
            .fill('#1976d2')
            .enabled(true)
            .stroke(null);

    var bigTooltipTitleSettings = {
        fontFamily: "'Verdana', Helvetica, Arial, sans-serif",
        fontWeight: 'normal',
        fontSize: '12px',
        hAlign: 'left',
        fontColor: '#212121'
    };

    gauge.label()
            .text('<span style="color: #64B5F6; font-size: 13px">WD: </span>' +
                    '<span style="color: #5AA3DD; font-size: 15px">' + <?php foreach($sologupit as $data) {echo $data['wd']; } ?> + '\u00B0' + '</span><br>' +
                    '<span style="color: #1976d2; font-size: 13px">WS:</span> ' +
                    '<span style="color: #166ABD; font-size: 15px">' + <?php foreach($sologupit as $data) {echo $data['ws']; } ?> + 'm/s' + '</span><br>' +
                    '<span style="color: #166ABD; font-size: 20px">' + <?php foreach($sologupit as $data) {echo $data['temperature']; } ?> + '\u00B0 C' + '</span>').useHtml(true)
            .textSettings(bigTooltipTitleSettings);
    gauge.label()
            .hAlign('center')
            .anchor('center-top')
            .offsetY(-20)
            .padding(15, 20)
            .background(
                    {
                        fill: '#fff',
                        stroke: {
                            thickness: 1,
                            color: '#E0F0FD'
                        }
                    }
            );

    // set container id for the chart
    gauge.container('container2');

    // initiate chart drawing
    gauge.draw();
});


// WD 3
anychart.onDocumentReady(function () {
    var gauge = anychart.gauges.circular();
    gauge.fill('#fff')
            .stroke(null)
            .padding(0)
            .margin(30)
            .startAngle(0)
            .sweepAngle(360);

    gauge.axis().labels()
            .padding(3)
            .position('outside')
            .format('{%Value}\u00B0');

    gauge.data([<?php foreach($soloplesan as $data) {echo $data['wd']; } ?>, <?php foreach($soloplesan as $data) {echo $data['ws']; } ?>]);//arah mata angin dan arah direction

    gauge.axis().scale()
            .minimum(0)
            .maximum(360)
            .ticks({interval: 30})
            .minorTicks({interval: 10});

    gauge.axis()
            .fill('#7c868e')
            .startAngle(0)
            .sweepAngle(-360)
            .width(1)
            .ticks(
                    {
                        type: 'line',
                        fill: '#7c868e',
                        length: 4,
                        position: 'outside'
                    }
            );

    gauge.axis(1)
            .fill('#7c868e')
            .startAngle(270)
            .radius(40)
            .sweepAngle(180)
            .width(1)
            .ticks(
                    {
                        type: 'line',
                        fill: '#7c868e',
                        length: 4,
                        position: 'outside'
                    }
            );

    gauge.axis(1).labels()
            .padding(3)
            .position('outside')
            .format('{%Value} m/s');

    gauge.axis(1).scale()
            .minimum(0)
            .maximum(25)
            .ticks({interval: 5})
            .minorTicks({interval: 1});

    gauge.title()
            .padding(0)
            .margin([0, 0, 10, 0]);

    gauge.marker()
            .fill('#64b5f6')
            .stroke(null)
            .size('15%')
            .zIndex(120)
            .radius('97%');

    gauge.needle()
            .fill('#1976d2')
            .stroke(null)
            .axisIndex(1)
            .startRadius('6%')
            .endRadius('38%')
            .startWidth('2%')
            .middleWidth(null)
            .endWidth('0');

    gauge.cap()
            .radius('4%')
            .fill('#1976d2')
            .enabled(true)
            .stroke(null);

    var bigTooltipTitleSettings = {
        fontFamily: "'Verdana', Helvetica, Arial, sans-serif",
        fontWeight: 'normal',
        fontSize: '12px',
        hAlign: 'left',
        fontColor: '#212121'
    };

    gauge.label()
            .text('<span style="color: #64B5F6; font-size: 13px">WD: </span>' +
                    '<span style="color: #5AA3DD; font-size: 15px">' + <?php foreach($soloplesan as $data) {echo $data['wd']; } ?> + '\u00B0' + '</span><br>' +
                    '<span style="color: #1976d2; font-size: 13px">WS:</span> ' +
                    '<span style="color: #166ABD; font-size: 15px">' + <?php foreach($soloplesan as $data) {echo $data['ws']; } ?> + 'm/s' + '</span><br>' +
                    '<span style="color: #166ABD; font-size: 20px">' + <?php foreach($soloplesan as $data) {echo $data['temperature']; } ?> + '\u00B0 C' + '</span>').useHtml(true)
            .textSettings(bigTooltipTitleSettings);
    gauge.label()
            .hAlign('center')
            .anchor('center-top')
            .offsetY(-20)
            .padding(15, 20)
            .background(
                    {
                        fill: '#fff',
                        stroke: {
                            thickness: 1,
                            color: '#E0F0FD'
                        }
                    }
            );

    // set container id for the chart
    gauge.container('container3');

    // initiate chart drawing
    gauge.draw();
});
</script>
</body>
</html>
