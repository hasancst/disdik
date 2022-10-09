<?= $this->include('Public/Layout/Header') ?>
<style>
    .vertical-center {
        -ms-transform: translateY(30%);
        transform: translateY(30%);
    }

    #strukturorganisasi {
        overflow-x: scroll !important;
    }
    .highcharts-container {
        margin: 0 auto;
    }
</style>
<div class="content">
    <div class="" style="max-width:98vw">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-tabs flex-column" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " data-toggle="tab" href="#T">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#TP">Tugas Pokok dan Fungsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#SO">Struktur Organisasi</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="tab-content">
                    <div id="T" class="container tab-pane active"><br>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mb-sm heading-primary"><strong><?= $setting_title ?></strong></h4>
                                <blockquote><?= $tentang_instansi ?></blockquote>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mb-sm heading-primary"><strong>Kantor</strong></h4>
                                <blockquote>
                                    <img class="img-responsive mb-lg" src="<?= $kantor_foto ?>" style="max-width: 40vw;"><br>
                                    <b><?= $setting_title . ' ' . $setting_subtitle ?></b>
                                    <div class="row">
                                        <div class="col-2">Alamat</div>
                                        <div class="col-10"><?= $setting_alamat ?></div>
                                        <div class="col-2">Telp.</div>
                                        <div class="col-10"><?= $setting_telp ?></div>
                                        <div class="col-2">Email</div>
                                        <div class="col-10"><?= $setting_email ?></div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mb-sm heading-primary"><strong>Pimpinan</strong></h4>
                                <blockquote>
                                    <div class="row">
                                        <div class="col-md-6 center">
                                            <img alt="" class="img-responsive mb-lg" src="<?= $pimpinan_foto ?>" style="max-height: 35vh;">
                                        </div>
                                        <div class="col-md-6 vertical-center">
                                            <table>
                                                <tr valign="top">
                                                    <td width="120px">Nama</td>
                                                    <td><strong><?= $pimpinan_name ?></strong></td>
                                                </tr>
                                                <tr valign="top">
                                                    <td>NIP</td>
                                                    <td><?= $pimpinan_nip ?></td>
                                                </tr>
                                                <tr valign="top">
                                                    <td>Jabatan</td>
                                                    <td><?= $pimpinan_jabatan ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div id="TP" class="container tab-pane fade"><br>
                        <h4 class="mb-sm heading-primary"><strong>Tugas Pokok</strong></h4>
                        <blockquote>
                            <?= $tugas_pokok ?>
                        </blockquote>
                        <hr class="short invisible">
                        <h4 class="mb-sm heading-primary"><strong>Fungsi</strong></h4>
                        <blockquote>
                            <?= $tugas_fungsi ?>
                        </blockquote>
                    </div>
                    <div id="SO" class="container tab-pane  fade"><br>
                        <h4 class="mb-sm heading-primary"><strong>Struktur Organisasi</strong></h4>
                        <blockquote class="p-0">
                            <?php if (count($employe) != 0) { ?>
                                <div id="strukturorganisasi"></div>
                            <?php } ?>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?= $this->include('Public/Layout/Footer') ?></body>
<script>
    Highcharts.chart('strukturorganisasi', {
        chart: {
            width:  <?= $c_width?>,
            height: <?= $c_height?> ,
            // 16:9 ratio,
            inverted: true,
        },
        title: {
            text: '',
        },
        series: [{
            type: 'organization',
            name: 'Staff',
            keys: ['to', 'from'],
            data: [
                <?php
                foreach ($employe as $key => $item) {
                ?>['<?= $item['id'] ?>', '<?= $item['parent'] ?>'],
                <?php } ?>
            ],
            
            nodes: [
                <?php
                $banyakParent = [];
                foreach ($employe as $key => $value) {
                    array_push($banyakParent, $value['parent']);
                }
                $parent = array_unique($banyakParent);
                foreach ($employe as $key => $item) {                ?> {
                        id: '<?= $item['id'] ?>',
                        title: '<?= $item['position'] ?>',
                        name: '<?= $item['full_name'] ?>',
                        <?php if ($key == 0) {
                            echo ' color: "red",column: 0';
                        } elseif (array_search($item['id'], $parent)) {
                           echo "layout:'hanging'";
                        }
                        ?>
                    },
                <?php } ?>
            ],
            colorByPoint: false,
            color: '#007ad0',
            dataLabels: {
                color: '#ffffff',
                nodeFormatter: function() {
                    var html = Highcharts.defaultOptions
                        .plotOptions
                        .organization
                        .dataLabels
                        .nodeFormatter
                        .call(this);
                    html = html.replace(
                        '<h4 style="',
                        '<h4 style="color: #ffffff; font-size: 10px; line-height: 1; padding-top:0;padding-bottom:5px; font-weight:bold;'
                    );
                    html = html.replace(
                        '<p style="',
                        '<p style="color: #ffffff; font-size: 9px; line-height: 1;'
                    );
                    html = html.replace(
                        '<img',
                        '<img style="display: block; width: 45px;  height: 45px;border-radius: 50%; background:white"'
                    );
                    return html;
                },
            },
            borderColor: 'white',
            nodeWidth: <?= $n_width?>,
        }],
        
        tooltip: {
            outside: true,
            useHTML: true
        },
        exporting: {
            allowHTML: true,
            sourcewidth:  <?= $c_width?>,
            sourceheight: <?= $c_height?> ,
        },
        scrollbar: {
            enabled: true,
        },
        credits: {
            enabled: true,
            href: '',
            text: ''
        }
    });
</script>

</html>