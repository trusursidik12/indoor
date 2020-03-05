<!DOCTYPE html>
<html>
<head>
  <title>SUKOHARJO</title>
  <link rel="icon" href="<?=base_url()?>assets/dist/img/ptrum.png">
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
    html, body, div, section, div
    {
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>
  <div class="" style="margin: 10px">
    <!-- Main content -->
    <section class="content">

      <a href="<?= site_url('export') ?>"><button>Download Data</button></a>

      <!-- Default box -->
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch card-width" style="margin-bottom: 260px;">
              <div class="card bg-light" height="100%" >                

                  <!-- /.card -->
                  <div class="card-header border-bottom-0 text-center text-bold text-dark font-title">
                    <a style="font-size: 30px;">SKH RUM</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="card">
                      <div class="table-responsive">
                        <table width="100%">
                          <tr>
                            <td colspan="5" class="font-table font-weight-bold">Exposure Chart H2S :</td>
                          </tr>
                          <tr class="text-center">
                            <td width="80" height="100" class="color-td-green">BAIK<br>0-10</td>
                            <td width="90" class="color-td-blue text-white">SEDANG<br>11-50</td>
                            <td class="color-td-yellow">TIDAK SEHAT<br>51-200</td>
                            <td class="color-td-red">SANGAT TIDAK SEHAT<br>201-1000</td>
                            <td class="color-td-black text-white">BAHAYA<br>>1000</td>
                          </tr>
                          <?php foreach($solorum as $data) : ?>
                          <?php $h2sppmshow = $data['h2s'] / 1500; ?>
                          <tr>
                            <td colspan="5" class="font-table font-weight-bold">Waktu : <?= $data['waktu']; ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" height="60" class="font-table font-weight-bold">
                              H2S : <?= round($h2sppmshow, 3); ?>
                            </td>
                            <td class="font-table font-weight-bold">
                              Status :
                            </td>
                          <?php if($h2sppmshow >= 0 && $h2sppmshow <= 10 ) : ?>
                            <td colspan="2" class="color-td-green text-center font-table font-weight-bold">
                                <?= "BAIK"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 11 && $h2sppmshow <= 50 ) : ?>
                            <td colspan="2" class="color-td-blue text-center text-white font-table font-weight-bold">
                                <?= "SEDANG"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 51 && $h2sppmshow <= 200 ) : ?>
                            <td colspan="2" class="color-td-yellow text-center font-table font-weight-bold">
                                <?= "TIDAK SEHAT"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 201 && $h2sppmshow <= 1000 ) : ?>
                            <td colspan="2" class="color-td-red text-center font-table font-weight-bold">
                                <?= "SANGAT TIDAK SEHAT"; ?>
                            </td>
                          <?php elseif($h2sppmshow > 1000 ) : ?>
                            <td colspan="2" class="color-td-black text-center text-white font-table font-weight-bold">
                                <?= "BERBAHAYA"; ?>
                            </td>
                          <?php endif ?> 
                          </tr>
                          <?php endforeach ?>
                        </table>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <div class="card-body p-0">
                    <div class="card">
                      <div class="table-responsive">
                        <table width="100%">
                          <tr>
                            <td colspan="2" class="font-table font-weight-bold">Exposure Chart CS2 :</td>
                          </tr>
                          <tr class="text-center">
                            <td width="250" height="100" class="color-td-green">BAIK<br>0-12</td>
                            <td class="color-td-blue text-white">TIDAK BAIK<br>>12</td>
                          </tr>
                          <?php foreach($solorum as $data) : ?>
                          <?php $cs2ppmshow = $data['cs2'] / 3130; ?>
                          <tr>
                            <td colspan="2" class="font-table font-weight-bold">Waktu : <?= $data['waktu']; ?></td>
                          </tr>
                          <tr>
                            <td height="60" class="font-table font-weight-bold">
                              <table width="100%">
                                <tr>
                                  <td>CS2 : <?= round($cs2ppmshow, 3); ?></td>
                                  <td style="text-align: right; padding-right: 20px;">Status :</td>
                                </tr>
                              </table>
                            </td>
                          <?php if($cs2ppmshow >= 0 && $cs2ppmshow <= 12 ) : ?>
                            <td class="color-td-green text-center font-table font-weight-bold">
                                <?= "BAIK"; ?>
                            </td>
                          <?php elseif($cs2ppmshow > 12 ) : ?>
                            <td class="color-td-blue text-center text-white font-table font-weight-bold">
                                <?= "SEDANG"; ?>
                            </td>
                          <?php endif ?> 
                          </tr>
                          <?php endforeach ?>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div height="300" class="card-footer" style="background-color: white;">
                    <div id="container"></div>
                    <hr>
                    <div class="text-right">
                      <a href="#" class="btn btn-sm">
                        <div class="container">
                          <img width="80%" src="<?= base_url('assets/dist/img/bg_white.png') ?>">
                        </div>
                      </a>
                    </div>
                  </div>

              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch card-width" style="margin-bottom: 260px;">
              <div class="card bg-light" height="100%">                

                  <!-- /.card -->
                  <div class="card-header border-bottom-0 text-center text-bold text-dark font-title">
                    <a style="font-size: 30px;">SKH GUPIT</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="card">
                      <div class="table-responsive">
                        <table width="100%">
                          <tr>
                            <td colspan="5" class="font-table font-weight-bold">Exposure Chart H2S :</td>
                          </tr>
                          <tr class="text-center">
                            <td width="80" height="100" class="color-td-green">BAIK<br>0-10</td>
                            <td width="90" class="color-td-blue text-white">SEDANG<br>11-50</td>
                            <td class="color-td-yellow">TIDAK SEHAT<br>51-200</td>
                            <td class="color-td-red">SANGAT TIDAK SEHAT<br>201-1000</td>
                            <td class="color-td-black text-white">BAHAYA<br>>1000</td>
                          </tr>
                          <?php foreach($sologupit as $data) : ?>
                          <?php $h2sppmshow = $data['h2s'] / 1500; ?>
                          <tr>
                            <td colspan="5" class="font-table font-weight-bold">Waktu : <?= $data['waktu']; ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" height="60" class="font-table font-weight-bold">
                              H2S : <?= round($h2sppmshow, 3); ?>
                            </td>
                            <td class="font-table font-weight-bold">
                              Status :
                            </td>
                          <?php if($h2sppmshow >= 0 && $h2sppmshow <= 10 ) : ?>
                            <td colspan="2" class="color-td-green text-center font-table font-weight-bold">
                                <?= "BAIK"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 11 && $h2sppmshow <= 50 ) : ?>
                            <td colspan="2" class="color-td-blue text-center text-white font-table font-weight-bold">
                                <?= "SEDANG"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 51 && $h2sppmshow <= 200 ) : ?>
                            <td colspan="2" class="color-td-yellow text-center font-table font-weight-bold">
                                <?= "TIDAK SEHAT"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 201 && $h2sppmshow <= 1000 ) : ?>
                            <td colspan="2" class="color-td-red text-center font-table font-weight-bold">
                                <?= "SANGAT TIDAK SEHAT"; ?>
                            </td>
                          <?php elseif($h2sppmshow > 1000 ) : ?>
                            <td colspan="2" class="color-td-black text-center text-white font-table font-weight-bold">
                                <?= "BERBAHAYA"; ?>
                            </td>
                          <?php endif ?> 
                          </tr>
                          <?php endforeach ?>
                        </table>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <div class="card-body p-0">
                    <div class="card">
                      <div class="table-responsive">
                        <table width="100%">
                          <tr>
                            <td colspan="2" class="font-table font-weight-bold">Exposure Chart CS2 :</td>
                          </tr>
                          <tr class="text-center">
                            <td width="250" height="100" class="color-td-green">BAIK<br>0-12</td>
                            <td class="color-td-blue text-white">TIDAK BAIK<br>>12</td>
                          </tr>
                          <?php foreach($sologupit as $data) : ?>
                          <?php $cs2ppmshow = $data['cs2'] / 3130; ?>
                          <tr>
                            <td colspan="2" class="font-table font-weight-bold">Waktu : <?= $data['waktu']; ?></td>
                          </tr>
                          <tr>
                            <td height="60" class="font-table font-weight-bold">
                              <table width="100%">
                                <tr>
                                  <td>CS2 : <?= round($cs2ppmshow, 3); ?></td>
                                  <td style="text-align: right; padding-right: 20px;">Status :</td>
                                </tr>
                              </table>
                            </td>
                          <?php if($cs2ppmshow >= 0 && $cs2ppmshow <= 12 ) : ?>
                            <td class="color-td-green text-center font-table font-weight-bold">
                                <?= "BAIK"; ?>
                            </td>
                          <?php elseif($cs2ppmshow > 12 ) : ?>
                            <td class="color-td-blue text-center text-white font-table font-weight-bold">
                                <?= "SEDANG"; ?>
                            </td>
                          <?php endif ?> 
                          </tr>
                          <?php endforeach ?>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer" style="background-color: white;">
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

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch card-width" style="margin-bottom: 260px;">
              <div class="card bg-light" height="100%">                

                  <!-- /.card -->
                  <div class="card-header border-bottom-0 text-center text-bold text-dark font-title">
                    <a style="font-size: 30px;">SKH PLESAN</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="card">
                      <div class="table-responsive">
                        <table width="100%">
                          <tr>
                            <td colspan="5" class="font-table font-weight-bold">Exposure Chart H2S :</td>
                          </tr>
                          <tr class="text-center">
                            <td width="80" height="100" class="color-td-green">BAIK<br>0-10</td>
                            <td width="90" class="color-td-blue text-white">SEDANG<br>11-50</td>
                            <td class="color-td-yellow">TIDAK SEHAT<br>51-200</td>
                            <td class="color-td-red">SANGAT TIDAK SEHAT<br>201-1000</td>
                            <td class="color-td-black text-white">BAHAYA<br>>1000</td>
                          </tr>
                          <?php foreach($soloplesan as $data) : ?>
                          <?php $h2sppmshow = $data['h2s'] / 1500; ?>
                          <tr>
                            <td colspan="5" class="font-table font-weight-bold">Waktu : <?= $data['waktu']; ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" height="60" class="font-table font-weight-bold">
                              H2S : <?= round($h2sppmshow, 3); ?>
                            </td>
                            <td class="font-table font-weight-bold">
                              Status :
                            </td>
                          <?php if($h2sppmshow >= 0 && $h2sppmshow <= 10 ) : ?>
                            <td colspan="2" class="color-td-green text-center font-table font-weight-bold">
                                <?= "BAIK"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 11 && $h2sppmshow <= 50 ) : ?>
                            <td colspan="2" class="color-td-blue text-center text-white font-table font-weight-bold">
                                <?= "SEDANG"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 51 && $h2sppmshow <= 200 ) : ?>
                            <td colspan="2" class="color-td-yellow text-center font-table font-weight-bold">
                                <?= "TIDAK SEHAT"; ?>
                            </td>
                          <?php elseif($h2sppmshow >= 201 && $h2sppmshow <= 1000 ) : ?>
                            <td colspan="2" class="color-td-red text-center font-table font-weight-bold">
                                <?= "SANGAT TIDAK SEHAT"; ?>
                            </td>
                          <?php elseif($h2sppmshow > 1000 ) : ?>
                            <td colspan="2" class="color-td-black text-center text-white font-table font-weight-bold">
                                <?= "BERBAHAYA"; ?>
                            </td>
                          <?php endif ?> 
                          </tr>
                          <?php endforeach ?>
                        </table>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <div class="card-body p-0">
                    <div class="card">
                      <div class="table-responsive">
                        <table width="100%">
                          <tr>
                            <td colspan="2" class="font-table font-weight-bold">Exposure Chart CS2 :</td>
                          </tr>
                          <tr class="text-center">
                            <td width="250" height="100" class="color-td-green">BAIK<br>0-12</td>
                            <td class="color-td-blue text-white">TIDAK BAIK<br>>12</td>
                          </tr>
                          <?php foreach($soloplesan as $data) : ?>
                          <?php $cs2ppmshow = $data['cs2'] / 3130; ?>
                          <tr>
                            <td colspan="2" class="font-table font-weight-bold">Waktu : <?= $data['waktu']; ?></td>
                          </tr>
                          <tr>
                            <td height="60" class="font-table font-weight-bold">
                              <table width="100%">
                                <tr>
                                  <td>CS2 : <?= round($cs2ppmshow, 3); ?></td>
                                  <td style="text-align: right; padding-right: 20px;">Status :</td>
                                </tr>
                              </table>
                            </td>
                          <?php if($cs2ppmshow >= 0 && $cs2ppmshow <= 12 ) : ?>
                            <td class="color-td-green text-center font-table font-weight-bold">
                                <?= "BAIK"; ?>
                            </td>
                          <?php elseif($cs2ppmshow > 12 ) : ?>
                            <td class="color-td-blue text-center text-white font-table font-weight-bold">
                                <?= "SEDANG"; ?>
                            </td>
                          <?php endif ?> 
                          </tr>
                          <?php endforeach ?>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer" style="background-color: white;">
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

<script>
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
