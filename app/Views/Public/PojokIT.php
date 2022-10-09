<?= $this->include('Public/Layout/Header') ?>
<div class="content">
    <div class="container">
        <h4 class="mb-sm heading-primary"><strong>Pojok IT</strong></h4>

        <div class="row mb-3">
            <div class="col-md-9">
                <?php foreach ($pojokit as $key => $item) {
                ?> <article class="post post-medium">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="post-image">
                                    <div class="image16-9">
                                        <a href="<?= base_url('pojokit/' . $item['id']) ?>"><img class="img-responsive" style="max-width: 20vw;" src="<?= base_url('Assets/post/' . $item['post_image']) ?>" alt="Berita Utama"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="post-content">
                                    <h5 class="mt-xs mb-xs beritaberandajudul"><a class="text-dark" href="<?= base_url('pojokit/' . $item['id']) ?>" title="<?= $item['post_title'] ?>"><?= $item['post_title'] ?></a></h5>
                                    <p class="mb-none beritaberandaisi" style="text-align:justify"><?php
                                                                                                    $konten = strip_tags($item['post_content']);
                                                                                                    $long = 200;
                                                                                                    $link = base_url('berita');
                                                                                                    if (strlen($konten) > $long) {
                                                                                                        $potongkonten   = substr($konten, 0, $long);
                                                                                                        $akhirspasi     = strrpos($potongkonten, ' ');
                                                                                                        $konten         = $akhirspasi ? substr($potongkonten, 0, $akhirspasi) : substr($potongkonten, 0);
                                                                                                    }
                                                                                                    echo $konten;
                                                                                                    ?></p>
                                    <i class="fa fa-calendar"></i> <?= date('d M y H:i:s', strtotime($item['created_at'])) ?>
                                </div>
                            </div>

                        </div>
                    </article>

                <?php
                } ?>

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
                            <?php foreach ($pojokit as $key => $item) { ?>
                                <div class="m-2 pt-2" style="border-bottom: ridge;">
                                    <a href="<?= base_url('pojokit/' . $item['id']) ?>">
                                        <h6 class="mt-xs mb-xs beritaberandajudul"><a class="text-primary" href="<?= base_url('pojokit/' . $item['id']) ?>" title="<?= $item['post_title'] ?>"><?= $item['post_title'] ?></a></h6>
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

</body>

</html>