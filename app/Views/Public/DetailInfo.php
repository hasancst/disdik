<?= $this->include('Public/Layout/Header') ?>
<div class="content">
    <div class="container">
        <div class="row ">
            <div class="col-md-9">
                <div id="infotoPDF">
                    <div class="m-5">
                        <h4 class="mb-sm"><strong><?= $title ?></strong></h4>
                        <p><i class="fas fa-calendar"></i> <?= $created ?> <i class="fas fa-user"></i> <?= $author ?> <i class="fas fa-tags"></i> <?= $tags ?></p>
                        <div class="p-2">
                            <?= $content ?>
                            <?php
                            if (file_exists($img)) {
                                $open    = opendir($img);
                                while ($file    = readdir($open)) {
                                    if ($file != '.' && $file != '..') {
                                        $files[] = $file;
                                        echo "<a class='m-2 text-primary' href=" . base_url($img . '/' . $file) . " target='_blank'>" . $file . "</a><br>";
                                    }
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
                <button id="klikdownload" onclick="klikdownload" data-title="<?= $title ?>" class="btn btn-primary m-2"> simpan Informasi Pelayanan ini</button>

            </div>
            <div class="col-md-3">
                <div class="">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Terbaru</a>
                        </li>
                    </ul>
                    <div class="tab-content p-2 card" id="custom-content-below-tabContent">
                        <div class="tab-pane p-2 fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                            <?php foreach ($info as $key => $item) { ?>
                                <div class="m-2 pt-2" style="border-bottom: ridge;">
                                    <a href="<?= base_url('info/' . $item['id']) ?>">
                                        <h6 class="mt-xs mb-xs Infoberandajudul"><a class="text-primary" href="<?= base_url('info/' . $item['id']) ?>" title="<?= $item['post_title'] ?>"><?= $item['post_title'] ?></a></h6>
                                        <i class="fa fa-calendar"></i> <?= date('d M y H:i:s', strtotime($item['created_at'])) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('Public/Layout/Footer') ?>

<script>
    $(document).ready(function() {

        $(document).on('click', '#klikdownload', function() {
            // infotoPDF
            var printContents = document.getElementById('infotoPDF').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();

            // document.body.innerHTML = originalContents;
            // document.getElementById('infotoPDF').hidden = !document.getElementById('infotoPDF').hidden;

            // var doc = new jsPDF();
            // var elementHTML = $('#infotoPDF').html();
            // var specialElementHandlers = {
            //     '#elementH': function(element, renderer) {
            //         return true;
            //     }
            // };
            // doc.setFontSize(18);
            // doc.text("<?= $setting_title ?>", 10, 8);
            // doc.setFontSize(12);
            // doc.text("<?= $setting_subtitle ?>", 10, 15);
            // doc.fromHTML(elementHTML, 15, 15, {
            //     'width': 170,

            //     'elementHandlers': specialElementHandlers
            // });
            // doc.save('InfoPenting-' + $(this).data('title') + '.pdf');
        })
    });
</script>