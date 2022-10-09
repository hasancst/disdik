<?= $this->include('Public/Layout/Header') ?>
<div id="demo" class="carousel slide content-1" data-ride="carousel">
    <ul class="carousel-indicators">
        <?php foreach ($slider as $key => $value) { ?>
            <li data-target="#demo" data-slide-to=<?= $key ?>></li>
        <?php } ?>
    </ul>
    <div class="carousel-inner">
        <?php foreach ($slider as $key => $value) { ?>
            <div class="carousel-item <?= $key == 0 ? 'active' : ''; ?>">
                <img src="<?= base_url('Assets/slider/' . $value['post_image']) ?>" class="w-100" style="height: 40vw;  filter: brightness(50%);">
                <div class="carousel-caption">
                    <h3><?= $value['post_title'] ?></h3>
                    <p><?= $value['post_content'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <div style="background: #00000078;padding: 10px;border-radius: 10px;">
            <span class="carousel-control-prev-icon"></span>

        </div>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <div style="background: #00000078;padding: 10px;border-radius: 10px;">
            <span class="carousel-control-next-icon"></span>
        </div>
    </a>
</div>
<div class="container">
    <div class="mt-xlg">
        <div class="center mb-sm pt-3 pb-2">
            <h4 class="heading-primary text-center"><span>Informasi Pelayanan</span>
            </h4>
        </div>
        <div id="infopenting" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#infopenting" data-slide-to="0" class="active"></li>

                <?php foreach ($info as $key => $item) { ?>
                    <li data-target="#infopenting" data-slide-to="<?= $key ?>"></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($info as $key => $item) { ?>
                    <div style="background: rgb(68, 204, 133);padding: 2em 10vw 2em 10vw;text-align: center;height: 26vh;" class="carousel-item <?= $key == 0 ? 'active' : ''; ?>">
                        <h5 class="infoberandajudul text-light"><strong><?= $item['post_title'] ?></strong></h5>
                        <p class="dateberanda text-light"><i class="fa fa-calendar"></i><?= $item['created_at'] ?></p>
                        <p class="dateberanda text-light"><a href="<?= base_url('info/' . $item['id']) ?>" class="btn">Baca Selengkapnya</a></p>

                    </div>

                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#infopenting" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#infopenting" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="mt-xlg">
        <div class="center mb-sm pt-3 pb-2">
            <h4 class="heading-primary text-center"><span>Berita Terbaru</span>
            </h4>
        </div>
        <div class="row" style="place-content:center">
            <?php for ($i = 0; $i < (count($news) > 2 ? 2 : count($news)); $i++) {
            ?>
                <div class="col-md-5">
                    <article class="post post-medium">
                        <div class="post-content">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img src="<?= base_url('Assets/post/' . $news[$i]['post_image']) ?>" class="w-100" style="height: 19vh;">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="mt-xs mb-xs beritaberandajudul"><?= $news[$i]['post_title']; ?></h5>
                                    <i class="fa fa-calendar"></i> <?= date('d M Y h:i:s', strtotime($news[$i]['created_at'])) ?><br>
                                    <a href="<?= base_url('info/' . $news[$i]['id']) ?>" class="text-primary ">Baca Selengkapnya</a>
                                </div>

                            </div>

                        </div>
                    </article>
                </div>
            <?php
            } ?>
        </div>

    </div>
</div>
</div>

<div style="padding: 1vw;">
    <div class="center mb-sm p-4">
        <h4 class="heading-primary text-center"><span>Aplikasi</span>
        </h4>
    </div>
    <div class="row" style="place-content: center;">
        <?PHP
        foreach ($apps as $key => $item) {
        ?>
            <div class="col-md-3 col-sm-6 col-12 aplikasi">
                <div class="info-box shadow-none" style="justify-content: center;">
                    <a href="<?= $item['module_url'] ?>" target="_blank" title="<?= $item['module_name'] ?>"><img src="<?= base_url('Assets/aplikasi/' . $item['module_img']) ?>" class="img-fluid mb-2 w-100" alt="<?= $item['module_name'] ?>" style="height: 20vh;"><br>
                        <h6><?= $item['module_name'] ?></h6>
                    </a>
                </div>

            </div>
        <?php } ?>

    </div>
</div>

</div>

<?= $this->include('Public/Layout/Footer') ?>