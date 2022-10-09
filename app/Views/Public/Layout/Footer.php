<style>
    .poling {
        font-weight: bold;
        width: 100%;
        padding: 0;
        margin: 1em;
        cursor: pointer;
    }

    .poling i {
        font-size: mediu;
    }
</style>
<footer>
    <div class="environment" style="padding: 0rem 1.75rem;">
        <div class="row">
            <div class="col-md-4 my-3">
                <h4>Kontak Kami</h4>
                <?php echo $setting_alamat;
                if ($setting_linkmap != '-' || $setting_linkmap != '') { ?>
                    <br><a href='<?= $setting_linkmap ?>' target='_blank'> <i class="fa fa-location-arrow"></i> <small>Lihat Peta</small></a><br />
                <?php } ?>
                <i class="fa fa-phone"></i> Telp. : <?= $setting_telp ?><br />
                <i class="fa fa-envelope"></i> Email : <a href="mailto:<?= $setting_email ?>"><?= $setting_email ?></a><br />
            </div>
            <?php if ($setting_instagram != "-" && $setting_instagram != '' || $setting_twitter != "-" && $setting_twitter != '' || $setting_facebook != "-" && $setting_facebook != '') { ?>

                <div class="col-md-3 my-3">
                    <h5>Sosial Media</h5>

                    <?php
                    if ($setting_instagram != "-" && $setting_instagram != '') { ?>
                        <a href='https://instagram.com/<?= $setting_instagram ?>' target='_blank'><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/50px-Instagram_icon.png"></a>
                    <?php }
                    if ($setting_twitter != "-" && $setting_twitter != '') { ?>
                        <a href='https://www.youtube.com/<?= $setting_twitter ?>' target='_blank'><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/50px-YouTube_full-color_icon_%282017%29.svg.png"></a>
                    <?php }
                    if ($setting_facebook != "-" && $setting_facebook != '') { ?>
                        <a href='https://facebook.com/<?= $setting_facebook ?>' target='_blank'><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/50px-2021_Facebook_icon.svg.png"> </a><br>
                    <?php } ?>

                </div>
            <?php } ?>
            <div class="col-md-5 my-4" style="align-self: self-end;">
                <div id="tampilpesan">
                    <?php
                    if (session()->getFlashdata('msg')) { ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
                    <?php } ?>
                </div>
                <div class="nav-item dropdown ml-3 mb-2">
                    <a data-toggle="dropdown" href="#" id="tombolkritik">
                        <Strong><i class="far fa-comments"></i> Kirim Pesan/Kritik/Saran</Strong>
                    </a>
                    <div class="dropdown-menu p-2" id="kritik" hidden style="width: 100%;">
                        <form action="kirimPesan" method="post" enctype="multipart/form-data">
                            <input hidden type="text" name="jenis" value="kirimpesan">
                            <h5> Kirim Pesan/Kritik/Saran</h5>
                            <hr>
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama_pesan" id="nama_pesan" class="form-control" placeholder="Masukkan nama..." required />
                            </div>
                            <div class="form-group">
                                <label class="control-label">NIK</label>
                                <input type="text" minlength="8" maxlength="16" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK..." required />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" name="email_pesan" id="email_pesan" class="form-control" placeholder="Masukkan email..." required />
                            </div>
                            <div class="form-group mb-lg">
                                <label class="control-label">Isi Pesan</label>
                                <textarea rows="2" name="pesan_pesan" id="pesan_pesan" class="form-control" placeholder="Masukkan isi pesan..." required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Ya</button>
                            </div>


                        </form>

                    </div>
                </div>
                <div class="pl-3 mb-1">

                    <h6 class="mb-1">Apakah Anda puas dengan informasi pada website ini?</h6>
                    <!-- <a data-toggle="modal" id="appinfo" data-target="#app-info" data-id="1" class="btn btn-primary"><i class="fas fa-info"></i></a> -->
                    <div class="poling text-success">
                        <a data-toggle="modal" data-target="#poling" data-poling="1" data-polingtext="Sangat Puas">
                            <i class="far fa-smile-beam"></i> Sangat Puas
                        </a>
                    </div>
                    <div class="poling text-">
                        <a data-toggle="modal" data-target="#poling" data-poling="2" data-polingtext="Puas">
                            <i class="far fa-smile"></i> Puas
                        </a>
                    </div>
                    <div class="poling text-primary">
                        <a data-toggle="modal" data-target="#poling" data-poling="3" data-polingtext="Biasa saja">
                            <i class="far fa-meh"></i> Biasa Saja
                        </a>
                    </div>
                    <div class="poling text-secondary">
                        <a data-toggle="modal" data-target="#poling" data-poling="4" data-polingtext="Tidak Puas">
                            <i class="far fa-frown"></i> Tidak Puas
                        </a>
                    </div>
                    <div class="poling text-danger">
                        <a data-toggle="modal" data-target="#poling" data-poling="5" data-polingtext="Sangat Tidak Puas">
                            <i class="far fa-angry"></i> Sangat Tidak Puas
                        </a>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <div class="copyrights">
        <p>&copy;<?= date('Y') ?> <?= $setting_subtitle ?></p>
    </div>
</footer>
<div class="modal fade" id="poling">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="polingtext"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="poling" method="post">
                    <input type="text" class="form-control" hidden name="poling" id="polingid">
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" name="nama_pesan" class="form-control" placeholder="Masukkan nama..." required />
                    </div>
                    <div class="form-group">
                        <label class="control-label">NIK</label>
                        <input type="text" minlength="16" maxlength="16" name="nik" class="form-control" placeholder="Masukkan NIK..." required />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" name="email_pesan" class="form-control" placeholder="Masukkan email..." required />
                    </div>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/sankey.js"></script>
<script src="https://code.highcharts.com/modules/organization.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '#tombolkritik', function() {
            document.getElementById('kritik').hidden = !document.getElementById('kritik').hidden;
        })

        $('#poling').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var polingtext = button.data('polingtext')
            var poling = button.data('poling')
            var modal = $(this)
            modal.find('.modal-title').text(polingtext)
            modal.find('#polingid').val(poling)
        })
    })

    function kirimpesan() {
        // kosongkan error form
        $("#error_nama_pesan").html('');
        $("#error_email_pesan").html('');
        $("#error_subjek_pesan").html('');
        $("#error_pesan_pesan").html('');
        $("#error_captcha_pesan").html('');
        // ambil data form dengan serialize
        var dataform = $("#kirimpesan").serialize();
        $.ajax({
            url: "pg/aksi.php",
            type: "post",
            data: dataform,
            success: function(result) {
                var hasil = JSON.parse(result);
                if (hasil.hasil !== "sukses") {
                    // tampilkan pesan error
                    $("#error_nama_pesan").html(hasil.error.nama_pesan);
                    $("#error_email_pesan").html(hasil.error.email_pesan);
                    $("#error_subjek_pesan").html(hasil.error.subjek_pesan);
                    $("#error_pesan_pesan").html(hasil.error.pesan_pesan);
                    $("#error_captcha_pesan").html(hasil.error.captcha_pesan);

                } else {
                    // do something, misalnya menampilkan berhasil
                    $("#tampilpesan").html("<div class='alert alert-success peringatanpesan'>Pesan berhasil dikirim !</div>");
                    // kosongkan lagi error form
                    $("#error_nama_pesan").val('');
                    $("#error_email_pesan").val('');
                    $("#error_subjek_pesan").val('');
                    $("#error_pesan_pesan").val('');
                    $("#error_captcha_pesan").val('');

                    $("#nama_pesan").val('');
                    $("#email_pesan").val('');
                    $("#subjek_pesan").val('');
                    $("#pesan_pesan").val('');
                    $("#captcha_pesan").val('');
                    setTimeout('LoadContentpesan()', 3000);
                }
            }
        });
    }

    function LoadContentpesan() {
        var e = jQuery.Event("keyup"); // or keypress/keydown
        e.keyCode = 27; // for Esc
        $(document).trigger(e);
        $(".peringatanpesan").remove();
    }
</script>