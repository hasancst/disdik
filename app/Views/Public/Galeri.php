<?= $this->include('Public/Layout/Header') ?>
<style>
    div.gallery {
        border: 1px solid #edeaea;
        border-bottom-right-radius: 1em;
        border-bottom-left-radius: 1em;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        max-width: 100%;
        height: 10em;
        min-width: 30%;
    }

    div.gallery img:hover {
        max-zoom: 100%;

    }

    .gallery-img {
        background: lightgray;
        text-align: center;
        transition: transform .2s;
    }

    .gallery-img:hover {}

    div.desc {
        padding: 15px;
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    .responsive {
        margin-bottom: 0.5em;
        padding: 0 6px;
        float: left;
        width: 24.99999%;
    }

    .responsive:hover {
        transform: scale(1.1);
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
</style>

<div class="content mb-5">
    <div class="container">
        <h4 class="mb-sm heading-primary"><strong>Galeri</strong></h4>
        <div class="row">

            <?php foreach ($news as $key => $value) { ?>
                <!-- <div class="col-sm-3"style="">
                    <div class="p-1 center">
                        <a href="<?= base_url('berita/' . $value['id']) ?>">
                            <img class="img-responsive" style="max-width: 20vw;" src="<?= base_url('Assets/post/' . $value['post_image']) ?>" alt="Berita Utama">
                        </a>

                        info judul
                    </div>
                </div> -->
                <div class="responsive">
                    <div class="gallery">
                        <!-- <a target="_blank" href="img_5terre.jpg">
                            <img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
                        </a> -->
                        <div class="gallery-img">
                            <a href="<?= base_url('berita/' . $value['id']) ?>">
                                <img src="<?= base_url('Assets/post/' . $value['post_image']) ?>" alt="Berita Utama">
                            </a>
                        </div>
                        <div class="desc"><?= $value['post_title'] ?></div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</div>

<?= $this->include('Public/Layout/Footer') ?>

</body>

</html>