<?= $this->include('Admin/Layout/Sidemenu') ?>

<?php if (session()->getFlashdata('true') || session()->getFlashdata('false')) { ?>
    <?php if (session()->getFlashdata('true')) { ?>
        <div class="alert alert-success"><?= session()->getFlashdata('true') ?></div>
    <?php } else { ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('false') ?></div>
    <?php } ?>
<?php } ?>
<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-primary">
                    <div class="inner">
                        <h3><?= $pesanQty ?></h3>
                        <p>Kritik & Saran</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comment"></i>
                    </div>
                    <a href="<?= base_url('pesan') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-secondary">
                    <div class="inner">
                        <h3><?= $staffQty ?></h3>

                        <p>Staff</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="<?= base_url('staff') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-success">
                    <div class="inner">
                        <h3><?= $appQty ?></h3>

                        <p>Aplikasi</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-plug"></i>
                    </div>
                    <a href="<?= base_url('aplikasi') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->


            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-danger">
                    <div class="inner">
                        <h3><?= $newsQty ?></h3>

                        <p>Berita</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="<?= base_url('news') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-warning">
                    <div class="inner">
                        <h3><?= $infoQty ?></h3>

                        <p>Informasi</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-sticky-note"></i>
                    </div>
                    <a href="<?= base_url('info') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-info">
                    <div class="inner">
                        <h3><?= $sliderQty ?></h3>

                        <p>Slider</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <a href="<?= base_url('slider') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    <div class="col-md-5">
        <div id="cpies" class="m-1 card"></div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Data OPD
                </h3>
                <a class="close" href="<?= base_url('instansi') ?>"> Selengkapnya </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="padding:0.5em">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-text-width"></i>
                                    Data Kantor
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="padding:0.5em">
                                <dl class="row" style="margin: 0;">
                                    <dt class="col-sm-5" style="text-align: center;">
                                        <img src="<?= $kantor_foto == '' ? 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar' : $kantor_foto ?>" class="img-fluid " style="height:20vh" />

                                    </dt>
                                    <dd class="col-sm-7">
                                        <strong> <?= $title ?></strong><br>
                                        <?= $subtitle ?><br>
                                        <?= $email ?><br>
                                        <?= $telp ?><br>
                                        <?= $alamat ?> <br>
                                    </dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">

                                    <i class="fas fa-text-width"></i>
                                    Data Pimpinan
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="padding:0.5em">
                                <dl class="row" style="margin: 0;">
                                    <dt class="col-sm-5" style="text-align: center;">
                                        <img src="<?= $pimpinan_foto == '' ? 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar' :  $pimpinan_foto ?>" class="img-fluid " style="height:20vh" />

                                    </dt>
                                    <dd class="col-sm-7">
                                        <strong> <?= $pimpinan_nama ?></strong><br>
                                        <?= $pimpinan_nip ?><br>
                                        <?= $pimpinan_jabatan ?><br>
                                    </dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</div>
<?= $this->include('Admin/Layout/Footer') ?>
<script>
    Highcharts.chart('cpies', {
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
            href: '<?= base_url('poling')?>',
            text: 'Selengkapnya'
        },
        title: {
            text: 'Hasil Poling'
        },
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
</script>