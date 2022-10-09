<?= $this->include('Admin/Layout/Sidemenu') ?>
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
        <h4 class="m-0 font-weight-bold text-primary">Daftar Info</h4>
      </div>
      <div class="col-md-2" style="text-align: end;">
        <button type="submit" class="btn btn-primary" href="#" data-toggle="modal" data-target="#infotambahinfo">Tambah Informasi</button>
      </div>
    </div>

  </div>
  <?php

  use App\Controllers\Fungsi;
  use App\Models\ModelUsers;

  if (session()->getFlashdata('true') || session()->getFlashdata('false')) {
    if (session()->getFlashdata('true')) { ?>
      <div class="alert alert-success"><?= session()->getFlashdata('true') ?></div>
    <?php } else {
    ?> <div class="alert alert-danger"><?= session()->getFlashdata('false') ?></div>
  <?php
    }
  } ?>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="tbInfo" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th style="width: 3%;">No.</th>
          <th>Judul</th>
          <th>Pencipta</th>
          <th>File</th>
          <!-- <th>aksi</th> -->
          <th style="width:7em">aksi</th>
        </tr>
      </thead>
      <tbody>
        <?PHP
        foreach ($data as $key => $item) {
        ?>
          <tr>
            <td><?PHP echo $key + 1 ?></td>
            <td><?= $item['post_title']; ?></td>
            <td><?php
                $model = new ModelUsers();
                $nameUser = $model->where('id', $item['post_author'])->findAll();
                echo $nameUser[0]['user_full_name']; ?></td>

            <td>
              <?php
              if (file_exists($item['post_image'])) {
                $open    = opendir($item['post_image']) or die('Tidak ada file');
                while ($file    = readdir($open)) {
                  if ($file != '.' && $file != '..') {
                    $files[] = $file;
                    echo "<a class='m-2' href=" . base_url($item['post_image'] . '/' . $file) . " target='_blank'><i class='fa fa-file' alt=" . $file . "></i></a>";
                  }
                }
              }
              ?>
            </td>

            <!-- <td><img src="<?= $item['post_image'] ? 'Assets/post/large/' . $item['post_image'] : 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Kosong' ?>" style="width: 10vw ;"></td> -->
            <td style="text-align: center;">
              <a data-toggle="modal" id="infoinfo" data-target="#info-info" data-post_title="<?= $item['post_title'] ?>" data-post_content='<?= $item['post_content'] ?>' data-postfile='<?= $item['post_image'] ?>' data-post_image="<?= $item['post_image'] ?>" data-post_author="<?= $item['post_author'] ?>" data-post_categories="<?= $item['post_categories'] ?>" data-post_type="<?= $item['post_type'] ?>" data-post_status="<?= $item['post_status'] ?>" data-post_visibility="<?= $item['post_visibility'] ?>" data-post_comment_status="<?= $item['post_comment_status'] ?>" data-post_slug="<?= $item['post_slug'] ?>" data-post_tags="<?= $item['post_tags'] ?>" data-post_counter="<?= $item['post_counter'] ?>" data-created_at="<?= date('d M Y h:i:s', strtotime($item['created_at'])) ?>" data-updated_at="<?= $item['updated_at'] ?>" data-deleted_at="<?= $item['deleted_at'] ?>" data-restored_at="<?= $item['restored_at'] ?>" data-created_by="<?= $item['created_by'] ?>" data-updated_by="<?= $item['updated_by'] ?>" data-deleted_by="<?= $item['deleted_by'] ?>" data-restored_by="<?= $item['restored_by'] ?>" 
              class="btn btn-primary" ?><i class="fas fa-info"></i></a>
              <a data-toggle="modal" id="infoedit" data-target="#info-edit" data-id="<?= $item['id'] ?>" data-post_title="<?= $item['post_title'] ?>" data-post_content='<?= $item['post_content'] ?>' data-postfile='<?= $item['post_image'] ?>' data-post_image="<?= $item['post_image'] ?>" data-post_author="<?= $item['post_author'] ?>" data-post_categories="<?= $item['post_categories'] ?>" data-post_type="<?= $item['post_type'] ?>" data-post_status="<?= $item['post_status'] ?>" data-post_visibility="<?= $item['post_visibility'] ?>" data-post_comment_status="<?= $item['post_comment_status'] ?>" data-post_slug="<?= $item['post_slug'] ?>" data-post_tags="<?= $item['post_tags'] ?>" data-post_counter="<?= $item['post_counter'] ?>" data-created_at="<?= date('d M Y h:i:s', strtotime($item['created_at'])) ?>" data-updated_at="<?= $item['updated_at'] ?>" data-deleted_at="<?= $item['deleted_at'] ?>" data-restored_at="<?= $item['restored_at'] ?>" data-created_by="<?= $item['created_by'] ?>" data-updated_by="<?= $item['updated_by'] ?>" data-deleted_by="<?= $item['deleted_by'] ?>" data-restored_by="<?= $item['restored_by'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i>
                <a data-toggle="modal" id="infodel" data-target="#info-delete" data-id="<?= $item['id'] ?>" data-post_title="<?= $item['post_title'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i>

                </a>

            </td>
          </tr>
        <?PHP
        }
        ?>

    </table>
  </div>
  <!-- /.card-body -->
</div>


<!-- ./row -->
<!-- /.container-fluid -->

<!-- /.content -->
<?= $this->include('Admin/Layout/Footer') ?>