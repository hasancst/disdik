<?= $this->include('Public/Layout/Header') ?>
<div class="content">
    <div class="container">
        <div class="row pt-2">
            <div class="col-md-9">
                <div class="">
                    <h4 class="mb-sm"><strong> Berita <?= $title ?></strong></h4>
                    <p><i class="fas fa-calendar"></i> <?= $created ?> <i class="fas fa-user"></i> <?= $author ?></p>
                </div>
                <div class="p-2">
                    <img class="img-responsive" style="width: 30vw;" src="<?= base_url('Assets/post/' . $img) ?>" alt="Berita Utama">
                    <?= $content ?>
                </div>
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
                            <?php foreach ($news as $key => $item) { ?>
                                <div class="m-2 pt-2" style="border-bottom: ridge;">
                                    <a href="<?= base_url('berita/' . $item['id']) ?>">
                                        <h6 class="mt-xs mb-xs beritaberandajudul"><a class="text-primary" href="<?= base_url('berita/' . $item['id']) ?>" title="<?= $item['post_title'] ?>"><?= $item['post_title'] ?></a></h6>
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