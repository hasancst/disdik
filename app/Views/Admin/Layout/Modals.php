<div class="modal fade" id="logoutsystem">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fitur <span id="usernonaktif-status"></span> Pengguna</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="logout" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <p>Anda yakin ingin keluar ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="gantisandi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Kata Sandi</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="changepass" method="post" enctype="multipart/form-data">
                <div class="modal-body"> <input type="text" hidden required id='userchangepass-valid' name="id" class="form-control form-control-user">
                    <div class="mb-3"> <label class="form-label">Kata sandi sekarang</label> <input required type="password" name="now" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">Kata sandi baru</label> <input required type="password" name="new" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">Konfirmasi kata sandi baru</label> <input required type="password" name="knew" class="form-control form-control-user"> </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="user-nonaktif">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fitur <span id="usernonaktif-status"></span> Pengguna</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="usernonaktif" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3" hidden> <label class="form-label">id</label> <input type="text" required id='usernonaktif-valid' name="id" class="form-control form-control-user"> </div>
                    <div class="mb-3" hidden> <label class="form-label">Name</label> <input type="text" required id='usernonaktif-valname' name="name" class="form-control form-control-user" placeholder="File Name"> </div>
                    <div class="mb-3" hidden> <label class="form-label">Name</label> <input type="text" required id='usernonaktif-valdel' name="del" class="form-control form-control-user" placeholder="File Name"> </div>
                    <p>Anda yakin ingin <span id="usernonaktif-actstatus"> </span> <strong id="usernonaktif-name"></strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="user-resetpass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fitur reset kata sandi</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="resetpass" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="text" hidden required id='userresetpass-valid' name="id" class="form-control form-control-user">
                    <input type="text" hidden required id='userresetpass-valname' name="name" class="form-control form-control-user">
                    <p>Anda yakin ingin mengatur ulang kata sandi pada pengguna </span> <strong id="userresetpass-name"></strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="user-tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pengguna</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="createUser" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3"> <label class="form-label">Username</label> <input type="text" required name="username" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">Nama</label> <input type="text" required name="nama" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">Kata Sandi</label> <input type="password" required name="pass" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">Email</label> <input type="email" required name="email" class="form-control form-control-user"> </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="PolingLengkap">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Poling</span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div style="width: 100%;text-align: center;">
                    <h3 id="poling_msg"></h3>
                </div>
                <div class="row">
                    <div class="col-md-3">NIK</div>: <div class="col-md-8"><span id="poling_nik"></span></div>
                    <div class="col-md-3">Nama Lengkap</div>: <div class="col-md-8"><span id="poling_name"></span></div>
                    <div class="col-md-3">Email</div>: <div class="col-md-8"><span id="poling_email"></span></div>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="PesanBaca">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Kritik/Pesan/Saran</span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">NIK</div>: <div class="col-md-8"><span id="pesan_nik"></span></div>
                    <div class="col-md-3">Nama Lengkap</div>: <div class="col-md-8"><span id="pesan_name"></span></div>
                    <div class="col-md-3">Email</div>: <div class="col-md-8"><span id="pesan_email"></span></div>
                    <div class="col-md-3">Pesan </div>:<div class="col-md-12 p-3"><span id="pesan_msg"></span></div>
                </div>
                <form action="" hidden>
                    <div class="mb-3">
                        <label class="form-label">Balas</label>
                        <textarea rows="4" name="message" class="form-control form-control-user"> </textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="infotambahinfo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Informasi Pelayanan</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="createInfo" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3"> <label class="form-label">Judul</label> <input type="text" required name="title" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">Tag</label>
                        <div class="row"> <input class="form-check-input" type="checkbox" value="" name="tag[]" checked hidden> <?php foreach ($mtags as $key => $item) {                            ?> <div class="col-md-3">
                                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['slug']; ?>" id="<?= $item['id'] ?>" name="tag[]"> <label class="form-check-label" for="<?= $item['slug'] ?>"> <?= $item['tag']; ?> </label> </div>
                                </div> <?php                            } ?> </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Kategori</label>
                        <div class="row"> <input class="form-check-input" type="checkbox" value="" name="category[]" checked hidden> <?php foreach ($mcategories as $key => $item) {
                                                                                                                                            if ($item['category_type'] == 'post') { ?> <div class="col-md-3">
                                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['category_name']; ?>" id="<?= $item['id'] ?>" name="category[]"> <label class="form-check-label" for="<?= $item['id']; ?>"> <?= $item['category_name']; ?> </label> </div>
                                    </div> <?php }
                                                                                                                                        } ?> </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Konten</label> <textarea id="infosummernote" name="konten"></textarea> </div>
                    <div class="mb-3"> <label class="form-label">File Pendukung </label> <input type="file" name="listGambar[]" accept="application/pdf" multiple> </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Status</label>
                                <div class="row form-group ">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" value="publish" checked> <label class="form-check-label">Terbit</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" value="draft"> <label class="form-check-label">Draft</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Akses</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" value="public" checked> <label class="form-check-label" for="public">Publik</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" value="private"> <label class="form-check-label" for="private">Pribadi</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Komentar</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" value="open" checked> <label class="form-check-label" for="open">Ya</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" value="close"> <label class="form-check-label" for="close">Tidak</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="info-info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="infoinfopost_title"></span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body"> <i class="fas fa-user"></i> <span id="infoinfopost_author"></span> <i class="fas fa-calendar"></i> <span id="infoinfocreated_at"></span>

                <div class="p-3"> <span id="infoinfopost_content"></span> </div>
                <!-- <strong>
                    <h5>Informasi Pendukung</h5>
                </strong> -->
                <!-- <div id="linkfile"></div> -->
                <div class="row" style="margin-bottom:1vh">
                    <div class="col-md-3">Kategori</div>:<div class="col-md-8"><span id="infoinfopost_categories"></span></div>
                    <div class="col-md-3">Status</div>:<div class="col-md-8"><span id="infoinfopost_status"></span></div>
                    <div class="col-md-3">Akses Lihat</div>:<div class="col-md-8"><span id="infoinfopost_visibility"></span></div>
                    <div class="col-md-3">Komentar</div>:<div class="col-md-8"><span id="infoinfopost_comment_status"></span></div>
                    <div class="col-md-3">Tag</div>:<div class="col-md-8"><span id="infoinfopost_tags"></span></div>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="info-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Informasi</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="editInfo" method="post" enctype="multipart/form-data">
                <div class="modal-body"> <input name="id" id="infoeditpost_id" hidden>
                    <div class="mb-3"> <label class="form-label">Judul</label> <input type="text" required id="infoeditpost_title" name="title" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">Tag</label>
                        <div class="row"> <input class="form-check-input" type="checkbox" value="" name="tag[]" checked hidden> <?php foreach ($mtags as $key => $item) {                            ?> <div class="col-md-3">
                                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['slug']; ?>" id="infoeditpost_tags" name="tag[]"> <label class="form-check-label" for="infoeditpost_tags"> <?= $item['tag']; ?> </label> </div>
                                </div> <?php } ?> </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Kategori</label>
                        <div class="row"> <input class="form-check-input" type="checkbox" value="" name="category[]" checked hidden> <?php foreach ($mcategories as $key => $item) {
                                                                                                                                            if ($item['category_type'] == 'post') { ?> <div class="col-md-3">
                                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['category_slug']; ?>" id="infoeditpost_categories" name="category[]"> <label class="form-check-label" for="infoeditpost_categories"> <?= $item['category_name']; ?> </label> </div>
                                    </div> <?php }
                                                                                                                                        } ?> </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Konten</label>
                        <textarea id="infoeditpost_content" name="konten"></textarea>
                    </div>
                    <iframe id="infoeditpost_image" name="showFile" loading style="width: 100%;height:40vh"></iframe>
                    <input hidden id="infoeditpost_images" type="text" name="gambartextnews" class="form-control-file border">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Status</label>
                                <div class="row form-group ">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" id="infoeditpost_status" value="publish"> <label class="form-check-label">Terbit</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" id="infoeditpost_status" value="draft"> <label class="form-check-label">Draft</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Akses</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" id="infoeditpost_visibility" value="public"> <label class="form-check-label" for="public">Publik</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" id="infoeditpost_visibility" value="private"> <label class="form-check-label" for="private">Pribadi</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Komentar</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" id="infoeditpost_comment_status" value="open"> <label class="form-check-label" for="open">Ya</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" id="infoeditpost_comment_status" value="close"> <label class="form-check-label" for="close">Tidak</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="info-delete">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus info</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="delInfo" method="post" enctype="multipart/form-data"> <input name="id" id="infodel_id" hidden>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus info <strong><span id="infodel_title"> </strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="beritatambahberita">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Berita</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="createNews" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3"> <label class="form-label">Judul</label> <input type="text" required name="title" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label" id="tag">Tag</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="tag[]" checked hidden> <?php foreach ($mtags as $key => $item) {                                    ?> <div class="col-md-4">
                                            <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['slug']; ?>" id="<?= $item['id'] ?>" name="tag[]"> <label class="form-check-label" for="beritaeditpost_tags"> <?= $item['tag']; ?> </label> </div>
                                        </div> <?php                                    } ?> </div>
                            </div>
                            <div class="mb-3"> <label class="form-label">Kategori</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="category[]" checked hidden> <?php foreach ($mcategories as $key => $item) {
                                                                                                                                                    if ($item['category_type'] == 'post') { ?> <div class="col-md-4">
                                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['category_slug']; ?>" id="<?= $item['id'] ?>" name="category[]"> <label class="form-check-label" for="<?= $item['id']; ?>"> <?= $item['category_name']; ?> </label> </div>
                                            </div> <?php }
                                                                                                                                                } ?> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Gambar</label> <img id="showgambar" name="showgambar" src="https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" style="width: 18vw;height:25vh" /> <input required type="file" accept="image/png, image/jpeg" name="gambarnews" onchange="readURL(this)" id="gambarnews" class="form-control-file border"> </div>
                        </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Konten</label> <textarea id="newssummernote" name="konten"></textarea> </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Status</label>
                                <div class="row form-group ">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" value="publish" checked> <label class="form-check-label">Terbit</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" value="draft"> <label class="form-check-label">Draft</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Akses</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" value="public" checked> <label class="form-check-label" for="public">Publik</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" value="private"> <label class="form-check-label" for="private">Pribadi</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Komentar</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" value="open" checked> <label class="form-check-label" for="open">Ya</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" value="close"> <label class="form-check-label" for="close">Tidak</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="berita-info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="beritainfopost_title"></span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div style="width: 100%;text-align: center;"> <img id="beritainfopost_image" height="360"> </div>
                <div class="p-3"> <i class="fas fa-user"></i> <span id="beritainfopost_author"></span> <i class="fas fa-calendar"></i> <span id="beritainfocreated_at"></span> <span id="beritainfopost_content"></span> </div>
                <div class="row" style="margin:1vh;">
                    <div class="col-md-2"><i class="fas fa-book"></i> Kategori</div>:<div class="col-md-9"><span id="beritainfopost_categories"></span></div>
                    <div class="col-md-2"><i class="fas fa-share"></i> Status</div>:<div class="col-md-9"><span id="beritainfopost_status"></span></div>
                    <div class="col-md-2"><i class="fas fa-lock"></i> Privasi</div>:<div class="col-md-9"><span id="beritainfopost_visibility"></span></div>
                    <div class="col-md-2"><i class="fas fa-comment"></i> Komentar</div>:<div class="col-md-9"><span id="beritainfopost_comment_status"></span></div>
                    <div class="col-md-2"><i class="fas fa-tags"></i> Tag</div>:<div class="col-md-9"><span id="beritainfopost_tags"></span></div>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="berita-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah berita</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="editNews" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8"> <input name="id" id="beritaeditpost_id" hidden>
                            <div class="mb-3"> <label class="form-label">Judul</label> <input type="text" required id="beritaeditpost_title" name="title" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label">Tag</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="tag[]" checked hidden> <?php foreach ($mtags as $key => $item) {                                    ?> <div class="col-md-4">
                                            <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['slug']; ?>" id="beritaeditpost_tags" name="tag[]"> <label class="form-check-label" for="beritaeditpost_tags"> <?= $item['tag']; ?> </label> </div>
                                        </div> <?php                                    } ?> </div>
                            </div>
                            <div class="mb-3"> <label class="form-label">Kategori</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="category[]" checked hidden> <?php foreach ($mcategories as $key => $item) {
                                                                                                                                                    if ($item['category_type'] == 'post') { ?> <div class="col-md-4">
                                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['category_slug']; ?>" id="beritaeditpost_categories" name="category[]"> <label class="form-check-label" for="beritaeditpost_categories"> <?= $item['category_name']; ?> </label> </div>
                                            </div> <?php }
                                                                                                                                                } ?> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Gambar</label><br> <img id="beritaeditpost_image" name="showgambar" src="https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" alt="white sample" width="720" height="180" /> <input hidden id="beritaeditpost_images" type="text" name="gambartextnews" class="form-control-file border"> <input required type="file" accept="image/png, image/jpeg" name="gambarnews" onchange="readURLedit(this)" class="form-control-file border"> </div>
                        </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Konten</label> <textarea id="beritaeditpost_content" name="konten"></textarea> </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Status</label>
                                <div class="row form-group ">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" id="beritaeditpost_status" value="publish"> <label class="form-check-label">Terbit</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" id="beritaeditpost_status" value="draft"> <label class="form-check-label">Draft</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Akses</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" id="beritaeditpost_visibility" value="public"> <label class="form-check-label" for="public">Publik</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" id="beritaeditpost_visibility" value="private"> <label class="form-check-label" for="private">Pribadi</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Komentar</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" id="beritaeditpost_comment_status" value="open"> <label class="form-check-label" for="open">Ya</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" id="beritaeditpost_comment_status" value="close"> <label class="form-check-label" for="close">Tidak</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="berita-delete">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus berita</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="delNews" method="post" enctype="multipart/form-data"> <input name="id" id="beritadel_id" hidden>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus berita <strong><span id="beritadel_title"> </strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="slider-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Slider</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="createSlider" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3"> <label class="form-label">Gambar</label><br> <img id="showgambarslider" name="showgambarslider" src="https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" style="width: 18vw;height:25vh" />
                                <input required type="file" accept="image/png, image/jpeg" name="gambarapp" onchange="readURLslider(this)" class="form-control-file border">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="mb-3"> <label class="form-label">Judul Slider</label> <input type="text" required name="title" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label">Deskripsi</label> <input type="text" required name="content" class="form-control form-control-user"> </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="slider-info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Slider</span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div style="width: 100%;text-align: center;"> <img id="sliderinfo_image" height="360"> </div>
                <h5 id="sliderinfo_name"></h5>
                <p id="sliderinfo_content"></p>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="slider-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Slider</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="editSlider" method="post" enctype="multipart/form-data"> <input id="slideredit_id" required type="text" name="id" class="form-control-file border" hidden>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Gambar</label><br> <img id="slideredit_image" name="showgambar" src="https://via.placeholder.com/100/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" alt="white sample" style="max-width: 18vw;height:28vh" /> <input hidden id="slideredit_images" name="gambartextnews" type="text" class="form-control-file border">
                                <input required type="file" accept="image/png, image/jpeg" name="gambarnews" onchange="readURLslideredit(this)" class="form-control-file border">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3"> <label class="form-label">Judul Slider</label> <input id="slideredit_name" type="text" required name="name" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label">Deskripsi</label> <input id="slideredit_content" type="text" required name="content" class="form-control form-control-user"> </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="slider-delete">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Slider</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="delSlider" method="post" enctype="multipart/form-data"> <input name="id" id="sliderdel_id" hidden>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus Slider <strong><span id="sliderdel_title"> </strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="app-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Aplikasi</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="createApps" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3"> <label class="form-label">Gambar</label><br> <img id="showgambarapp" name="showgambarapp" src="https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" style="width: 18vw;height:25vh" />
                                <input required type="file" accept="image/png, image/jpeg" name="gambarapp" onchange="readURLapp(this)" class="form-control-file border">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="mb-3"> <label class="form-label">Nama Aplikasi</label> <input type="text" required name="name" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label">Alamat Aplikasi</label> <input type="text" required name="url" class="form-control form-control-user"> </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="app-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Aplikasi</span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <h6 id="appinfo_name"></h6>
                <p id="appinfo_url"></p>
                <div style="width: 100%;text-align: center;"> <img id="appinfo_image" style="width: 30vw;"> </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="app-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Aplikasi</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="editApps" method="post" enctype="multipart/form-data"> <input id="appedit_id" required type="text" name="id" class="form-control-file border" hidden>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Gambar</label><br> <img id="appedit_image" name="showgambar" src="https://via.placeholder.com/100/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" alt="white sample" style="max-width: 18vw;height:28vh" /> <input hidden id="appedit_images" name="gambartextnews" type="text" class="form-control-file border">
                                <input required type="file" accept="image/png, image/jpeg" name="gambarnews" onchange="readURLappedit(this)" class="form-control-file border">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3"> <label class="form-label">Nama Aplikasi</label> <input id="appedit_name" type="text" required name="name" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label">Alamat Aplikasi</label> <input id="appedit_url" type="text" required name="url" class="form-control form-control-user"> </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="app-delete">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Aplikasi</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="delApps" method="post" enctype="multipart/form-data"> <input name="id" id="appdel_id" hidden>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus Aplikasi <strong><span id="appdel_title"> </strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="infoit-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Info IT</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="createit" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3"> <label class="form-label">Judul</label> <input type="text" required name="title" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label" id="tag">Tag</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="tag[]" checked hidden> <?php foreach ($mtags as $key => $item) {                                    ?> <div class="col-md-4">
                                            <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['slug']; ?>" id="<?= $item['id'] ?>" name="tag[]"> <label class="form-check-label" for="beritaeditpost_tags"> <?= $item['tag']; ?> </label> </div>
                                        </div> <?php                                    } ?> </div>
                            </div>
                            <div class="mb-3"> <label class="form-label">Kategori</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="category[]" checked hidden> <?php foreach ($mcategories as $key => $item) {
                                                                                                                                                    if ($item['category_type'] == 'post') { ?> <div class="col-md-4">
                                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['category_slug']; ?>" id="<?= $item['id'] ?>" name="category[]"> <label class="form-check-label" for="<?= $item['id']; ?>"> <?= $item['category_name']; ?> </label> </div>
                                            </div> <?php }
                                                                                                                                                } ?> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Gambar</label> <img id="showgambarit" name="showgambarit" src="https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" style="width: 18vw;height:25vh" /> <input required type="file" accept="image/png, image/jpeg" name="gambarnews" onchange="readURLit(this)" id="gambarnews" class="form-control-file border"> </div>
                        </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Konten</label> <textarea id="infoITsummernote" name="konten"></textarea> </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Status</label>
                                <div class="row form-group ">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" value="publish" checked> <label class="form-check-label">Terbit</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" value="draft"> <label class="form-check-label">Draft</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Akses</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" value="public" checked> <label class="form-check-label" for="public">Publik</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" value="private"> <label class="form-check-label" for="private">Pribadi</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Komentar</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" value="open" checked> <label class="form-check-label" for="open">Ya</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" value="close"> <label class="form-check-label" for="close">Tidak</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="infoit-info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="itinfopost_title"></span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div style="width: 100%;text-align: center;"> <img id="itinfopost_image" width="720" height="180" /> </div>
                <div class="p-3"> <i class="fas fa-user"></i> <span id="itinfopost_author"></span> <i class="fas fa-calendar"></i> <span id="beritainfocreated_at"></span> <span id="itinfopost_content"></span> </div>
                <div class="row" style="margin:1vh;">
                    <div class="col-md-2"><i class="fas fa-book"></i> Kategori</div>:<div class="col-md-9"><span id="itinfopost_categories"></span></div>
                    <div class="col-md-2"><i class="fas fa-share"></i> Status</div>:<div class="col-md-9"><span id="itinfopost_status"></span></div>
                    <div class="col-md-2"><i class="fas fa-lock"></i> Privasi</div>:<div class="col-md-9"><span id="itinfopost_visibility"></span></div>
                    <div class="col-md-2"><i class="fas fa-comment"></i> Komentar</div>:<div class="col-md-9"><span id="itinfopost_comment_status"></span></div>
                    <div class="col-md-2"><i class="fas fa-tags"></i> Tag</div>:<div class="col-md-9"><span id="itinfopost_tags"></span></div>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>

        </div>
    </div>
</div>
<div class="modal fade" id="infoit-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Pojok IT</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="editit" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8"> <input name="id" id="iteditpost_id" hidden>
                            <div class="mb-3"> <label class="form-label">Judul</label> <input type="text" required id="iteditpost_title" name="title" class="form-control form-control-user"> </div>
                            <div class="mb-3"> <label class="form-label">Tag</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="tag[]" checked hidden> <?php foreach ($mtags as $key => $item) {                                    ?> <div class="col-md-4">
                                            <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['slug']; ?>" id="iteditpost_tags" name="tag[]"> <label class="form-check-label" for="iteditpost_tags"> <?= $item['tag']; ?> </label> </div>
                                        </div> <?php                                    } ?> </div>
                            </div>
                            <div class="mb-3"> <label class="form-label">Kategori</label>
                                <div class="row"> <input class="form-check-input" type="checkbox" value="" name="category[]" checked hidden> <?php foreach ($mcategories as $key => $item) {
                                                                                                                                                    if ($item['category_type'] == 'post') { ?> <div class="col-md-4">
                                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="<?= $item['category_slug']; ?>" id="iteditpost_categories" name="category[]"> <label class="form-check-label" for="iteditpost_categories"> <?= $item['category_name']; ?> </label> </div>
                                            </div> <?php }
                                                                                                                                                } ?> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Gambar</label><br>
                                <img id="iteditpost_image" name="showgambar" src="https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" alt="white sample" width="720" height="180" />
                                <input hidden id="iteditpost_images" type="text" name="gambartextnews" class="form-control-file border"> <input required type="file" accept="image/png, image/jpeg" name="gambarnews" onchange="readURLitedit(this)" class="form-control-file border">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3"> <label class="form-label">Konten</label> <textarea id="iteditpost_content" name="konten"></textarea> </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Status</label>
                                <div class="row form-group ">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" id="iteditpost_status" value="publish"> <label class="form-check-label">Terbit</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="status" id="iteditpost_status" value="draft"> <label class="form-check-label">Draft</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Akses</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" id="iteditpost_visibility" value="public"> <label class="form-check-label" for="public">Publik</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="akses" id="iteditpost_visibility" value="private"> <label class="form-check-label" for="private">Pribadi</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3"> <label class="form-label">Komentar</label>
                                <div class="row form-group">
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" id="iteditpost_comment_status" value="open"> <label class="form-check-label" for="open">Ya</label> </div>
                                    <div class="col-md-4 form-check"> <input class="form-check-input" type="radio" name="comment" id="iteditpost_comment_status" value="close"> <label class="form-check-label" for="close">Tidak</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="infoit-delete">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Pojok IT</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="delit" method="post" enctype="multipart/form-data"> <input name="id" id="itdel_id" hidden>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus informasi di Pojok IT <strong><span id="itdel_title"> </strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="logsdetails">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Aktivitas</span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">timestamp </div>:<div class="col-md-8"><span id="logstimestamp"></span></div>
                    <div class="col-md-3">ip address </div>:<div class="col-md-8"><span id="logsipaddress"></span></div>
                    <div class="col-md-3">user </div>:<div class="col-md-8"><span id="logsuser"></span></div>
                    <div class="col-md-3">uri </div>:<div class="col-md-8"><span id="logsuri"></span></div>
                    <div class="col-md-3">method </div>:<div class="col-md-8"><span id="logsmethod"></span></div>
                    <div class="col-md-3">status </div>:<div class="col-md-8"><span id="logsstatus"></span></div>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahstaff">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Staff</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="createstaff" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3"> <label class="form-label">Jabatan</label>
                        <div class="row m-2">
                            <div class="col-md-4 form-check">
                                <input class="form-check-input" type="radio" name="jabatan" id="checkKabag" value="kabid" checked>
                                <label class="form-check-label" for="checkKabag">Kepala Bidang</label>
                            </div>
                            <div class="col-md-4 form-check">
                                <input class="form-check-input" type="radio" name="jabatan" id="checkKasi" value="kasi" <?= count($atasan) == 0 ? 'disabled' : '' ?>>
                                <label class="form-check-label" for="checkKasi">Kepala Seksi</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" id="inputkabag"> <label class="form-label">Bidang</label> <input type="text" name="kabag" class="form-control form-control-user"> </div>
                    <div class="mb-3" id="inputkasi" hidden>
                        <div class="mb-3">
                            <label class="form-label">Atasan</label>
                            <select class="form-control form-control-user" name="atasan"> <?php foreach ($atasan as $key => $item) { ?> <option value=<?= $item['id'] ?>> <?= $item['description'] . ' - ' . $item['full_name']; ?> </option> <?php } ?></select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Seksi</label>

                            <input type="text" name="kasi" class="form-control form-control-user">
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Pas Poto</label>
                            <img id="showgambarstaff" name="showgambar" src="https://via.placeholder.com/180/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" alt="white sample" style="height:180px" /> <input hidden id="appedit_images" name="gambartextnews" type="text" class="form-control-file border">
                            <input required type="file" accept="image/png, image/jpeg" name="gambarapp" onchange="readURLstaff(this)" class="form-control-file border">
                        </div>
                        <div class="col-md-8"> -->
                    <div class="mb-3"> <label class="form-label">Nama Lengkap</label> <input type="text" required name="name" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">NIP</label> <input type="text" required name="nip" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">NIK</label> <input type="text" required name="nik" class="form-control form-control-user"> </div>
                    <!-- </div>
                    </div> -->

                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="staff-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Staff</span></h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div class="row" style="margin-bottom:1vh">
                    <div class="col-md-3">Nama Lengkap</div>:<div class="col-md-8"><span id="infostaffname"></span></div>
                    <div class="col-md-3">NIP</div>:<div class="col-md-8"><span id="infostaffnip"></span></div>
                    <div class="col-md-3">NIK</div>:<div class="col-md-8"><span id="infostaffnik"></span></div>
                    <div class="col-md-3">Jabatan</div>:<div class="col-md-8"><span style="text-transform: uppercase;" id="infostaffjabatan"></span></div>
                    <div class="col-md-3">Atasan</div>:<div class="col-md-8"><span id="infostaffatasan"></span></div>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="staff-delete">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Staff</h4> <button type="button" class="close" data-dismiss="modal" data- aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="staffdel" method="post" enctype="multipart/form-data"> <input name="id" id="staffdel_id" hidden><input name="idorg" id="staffdel_idorg" hidden>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus staff <strong><span id="staffdel_title"> </strong> ?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="staff-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Staff</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="editStaff" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input hidden type="text" id="editstaffid" required name="id" class="form-control form-control-user">
                    <input hidden type="text" id="editstaffidorg" required name="idorg" class="form-control form-control-user">
                    <input name="type" id="editstafftype" hidden>

                    <div class="row">
                        <div id="jabatan" class="col-md-6">
                            <div class="ml-1 mb-3"> <label class="form-label">Jabatan</span></label> <br>
                                <span style="text-transform:uppercase" id="editjabatan"></span>
                            </div>
                        </div>
                        <div class="col-md-8" id="bidang">
                            <div class="mb-3"> <label class="form-label">Bidang </label> <br>
                                <input type="text" style="text-transform:uppercase" id="editstaffbidang" name="jabatan" class="form-control form-control-user">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" id="editatasan" hidden>
                        <label class="form-label">Atasan</label>
                        <select class="form-control form-control-user" id="editstaffatasan" name="atasan">
                            <?php foreach ($atasan as $key => $item) { ?>
                                <option value=<?= $item['id_org']; ?>>
                                    <?= $item['description'] . ' : ' . $item['full_name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Pas Poto</label>
                            <img id="showgambarstaff" name="showgambar" src="https://via.placeholder.com/180/b9acac/FFFFFF?text=Masukkan Gambar" class="img-fluid mb-2" alt="white sample" style="height:180px" /> <input hidden id="appedit_images" name="gambartextnews" type="text" class="form-control-file border">
                            <input required type="file" accept="image/png, image/jpeg" name="gambarapp" onchange="readURLstaff(this)" class="form-control-file border">
                        </div>
                        <div class="col-md-8"> -->

                    <div class="mb-3"> <label class="form-label">Nama Lengkap</label> <input type="text" required id="editstaffname" name="name" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">NIP</label> <input type="text" required id="editstaffnip" name="nip" class="form-control form-control-user"> </div>
                    <div class="mb-3"> <label class="form-label">NIK</label> <input type="text" required id="editstaffnik" name="nik" class="form-control form-control-user"> </div>
                    <!-- </div>
                    </div> -->
                    <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button type="submit" class="btn btn-danger">Ya</button> </div>
            </form>
        </div>
    </div>
</div>