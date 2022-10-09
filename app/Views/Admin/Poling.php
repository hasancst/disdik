<?= $this->include('Admin/Layout/Sidemenu') ?>

<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
        <h4 class="m-0 font-weight-bold text-primary"> Poling</h4>
      </div>
      <div class="col-md-2" style="text-align: end;">

      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-md-7">
      <div class="m-1 card">
        <div class="card-body">
          <table id="tbPoling" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 1vw;">No.</th>
                <th>Waktu</th>
                <?= $type == 'super_user' ? "<th>IP Address</th>" : '' ?>
                <th>Nama</th>
                <th>Poling</th>
               
              </tr>
            </thead>
            <tbody>
              <?PHP
              foreach ($dataPoling as $key => $item) {
              ?>
                <tr data-toggle="modal" id="PolingLengkaps" data-target="#PolingLengkap" data-nik="<?= $item['nik'] ?>" data-name="<?= $item['fullname'] ?>" data-email="<?= $item['email'] ?>" data-msg="<?= $item['message'] ?>">
                  <td><?PHP echo $key + 1 ?></td>

                  <td><?= $item['created_at']; ?></td>
                  <?= $type == 'super_user' ? "<td>" . $item['ip_address'] . "</td>" : '' ?>

                  <td><?= $item['fullname']; ?></td>
                  <td><?php

                      if ($item['message'] == "1") {
                        echo "Sangat Puas";
                      } else if ($item['message'] == "2") {
                        echo "Puas";
                      } else if ($item['message'] == "3") {
                        echo "Biasa saja";
                      } else if ($item['message'] == "4") {
                        echo "Tidak Puas";
                      } else {
                        echo "Sangat Tidak Puas";
                      } ?>
                  </td>


                </tr>
              <?PHP
              }
              ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div id="cbar" class="m-1 card"></div>
      <div id="cpie" class="m-1 card"></div>
    </div>
  </div>

</div>

<?= $this->include('Admin/Layout/Footer') ?>
<script>
  Highcharts.chart('cpie', {
    chart: {
      type: 'pie',
      height: 300,

      options3d: {
        enabled: true,
        alpha: 45,
        beta: 0
      }
    },
    exporting: {
      enabled: false
    },
    credits: {
      enabled: true,
      href: '',
      text: ''
    },
    title: '',
    accessibility: {
      point: {
        valueSuffix: '%'
      }
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        depth: 35,
        dataLabels: {
          enabled: true,
          format: '{point.name}'
        }
      }
    },
    series: [{
      type: 'pie',
      name: 'Poling',
      data: [{
        y: <?= $sp ?>,
        name: 'Sangat Puas',
        color: '#90ED7D'
      }, {
        y: <?= $p ?>,
        name: 'Puas',
        color: 'green'
      }, {
        y: <?= $bs ?>,
        name: 'Biasa saja',
        color: 'blue'
      }, {
        y: <?= $tp ?>,
        name: 'Tidak Puas',
        color: 'orange'
      }, {
        y: <?= $stp ?>,
        name: 'Sangat Tidak Puas',
        color: 'red'
      }]
    }]
  });
  Highcharts.chart('cbar', {
    chart: {
      type: 'column',
      height: 300,
      options3d: {
        enabled: true,
        alpha: 10,
        beta: 0
      }
    },
    exporting: {
      enabled: false
    },
    credits: {
      enabled: true,
      href: '',
      text: ''
    },
    title: '',
    accessibility: {
      announceNewData: {
        enabled: true
      }
    },
    xAxis: {
      type: 'category'
    },
    yAxis: {
      title: {
        text: 'Total Hasil Poling'
      }

    },
    legend: {
      enabled: false
    },
    plotOptions: {
      series: {
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          // format: '{point.y:.1f}%'
        }
      }
    },

    tooltip: {
      headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
      pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [{
      name: "Poling",
      data: [{
        x: 0,
        y: <?= $sp ?>,
        name: 'Sangat Puas',
        color: '#90ED7D'
      }, {
        x: 1,
        y: <?= $p ?>,
        name: 'Puas',
        color: 'green'
      }, {
        x: 2,
        y: <?= $bs ?>,
        name: 'Biasa saja',
        color: 'blue'
      }, {
        x: 3,
        y: <?= $tp ?>,
        name: 'Tidak Puas',
        color: 'orange'
      }, {
        x: 4,
        y: <?= $stp ?>,
        name: 'Sangat Tidak Puas',
        color: 'red'
      }]
    }],

  });
  $(document).ready(function() {

    $(document).on('click', '#download', function() {
      // document.getElementById('infotoPDF').hidden = !document.getElementById('infotoPDF').hidden;

      var doc = new jsPDF();
      // var canvasIE = document.createElement('canvas');

      // canvg(canvasIE, svg);

      // dataUrl = canvasIE.toDataURL('image/JPEG');
      var elementHTML = $('#tbPoling').html();
      var specialElementHandlers = {
        '#elementH': function(element, renderer) {
          return true;
        }
      };
      doc.setFontSize(18);
      doc.text("Hasil Poling", 10, 8);
      doc.setFontSize(12);


      doc.fromHTML(elementHTML, 15, 15, {
        'width': 170,

        'elementHandlers': specialElementHandlers
      });
      doc.save('InfoPenting-' + $(this).data('title') + '.pdf');
    })
  });
</script>