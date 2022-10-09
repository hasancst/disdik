<?= $this->include('Admin/Layout/Sidemenu') ?>
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
        <h4 class="m-0 font-weight-bold text-primary">Daftar Berita</h4>
      </div>
      <div class="col-md-2" style="text-align: end;">
        <button type="submit" class="btn btn-primary" href="#" data-toggle="modal" data-target="#beritatambahberita">Tambah Berita</button>
      </div>
    </div>

  </div>
  <?php

  use App\Models\ModelUsers;

  $model = new ModelUsers();
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
    <table id="tbNews" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th style="width: 3%;">No.</th>
          <th>Judul</th>
          <th>Pencipta</th>
          <th>Gambar</th>
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

                $nameUser = $model->where('id', $item['post_author'])->findAll();
                echo $nameUser[0]['user_full_name']; ?></td>

            <td><img src="<?= $item['post_image'] ? 'Assets/post/' . $item['post_image'] : 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Kosong' ?>" height="90"></td>
            <td style="text-align: center;">
            <a data-toggle="modal" id="beritainfo" data-target="#berita-info" data-id="<?= str_replace('"', "'", $item['id']) ?>" data-post_title="<?= str_replace('"', "'", $item['post_title']) ?>" data-post_content="<?= str_replace('"', "'", $item['post_content']) ?>" data-post_image="<?= str_replace('"', "'", $item['post_image']) ?>" data-post_author="<?= str_replace('"', "'", $item['post_author']) ?>" data-post_categories="<?= str_replace('"', "'", $item['post_categories']) ?>" data-post_type="<?= str_replace('"', "'", $item['post_type']) ?>" data-post_status="<?= str_replace('"', "'", $item['post_status']) ?>" data-post_visibility="<?= str_replace('"', "'", $item['post_visibility']) ?>" data-post_comment_status="<?= str_replace('"', "'", $item['post_comment_status']) ?>" data-post_slug="<?= str_replace('"', "'", $item['post_slug']) ?>" data-post_tags="<?= str_replace('"', "'", $item['post_tags']) ?>" data-post_counter="<?= str_replace('"', "'", $item['post_counter']) ?>" data-created_at="<?= date('d M Y h:i:s', strtotime($item['created_at'])) ?>" data-updated_at="<?= str_replace('"', "'", $item['updated_at']) ?>" data-deleted_at="<?= str_replace('"', "'", $item['deleted_at']) ?>" data-restored_at="<?= str_replace('"', "'", $item['restored_at']) ?>" data-created_by="<?= str_replace('"', "'", $item['created_by']) ?>" data-updated_by="<?= str_replace('"', "'", $item['updated_by']) ?>" data-deleted_by="<?= str_replace('"', "'", $item['deleted_by']) ?>" data-restored_by="<?= str_replace('"', "'", $item['restored_by']) ?>" class="btn btn-primary" ?><i class="fas fa-info"></i></a>
              <a data-toggle="modal" id="beritaedit" data-target="#berita-edit" data-id="<?= str_replace('"', "'", $item['id']) ?>" data-post_title="<?= str_replace('"', "'", $item['post_title']) ?>" data-post_content="<?= str_replace('"', "'", $item['post_content']) ?>" data-post_image="<?= str_replace('"', "'", $item['post_image']) ?>" data-post_author="<?= str_replace('"', "'", $item['post_author']) ?>" data-post_categories="<?= str_replace('"', "'", $item['post_categories']) ?>" data-post_type="<?= str_replace('"', "'", $item['post_type']) ?>" data-post_status="<?= str_replace('"', "'", $item['post_status']) ?>" data-post_visibility="<?= str_replace('"', "'", $item['post_visibility']) ?>" data-post_comment_status="<?= str_replace('"', "'", $item['post_comment_status']) ?>" data-post_slug="<?= str_replace('"', "'", $item['post_slug']) ?>" data-post_tags="<?= str_replace('"', "'", $item['post_tags']) ?>" data-post_counter="<?= str_replace('"', "'", $item['post_counter']) ?>" data-created_at="<?= date('d M Y h:i:s', strtotime($item['created_at'])) ?>" data-updated_at="<?= str_replace('"', "'", $item['updated_at']) ?>" data-deleted_at="<?= str_replace('"', "'", $item['deleted_at']) ?>" data-restored_at="<?= str_replace('"', "'", $item['restored_at']) ?>" data-created_by="<?= str_replace('"', "'", $item['created_by']) ?>" data-updated_by="<?= str_replace('"', "'", $item['updated_by']) ?>" data-deleted_by="<?= str_replace('"', "'", $item['deleted_by']) ?>" data-restored_by="<?= str_replace('"', "'", $item['restored_by']) ?>" class="btn btn-warning"><i class="fas fa-edit"></i>
                <a data-toggle="modal" id="beritadel" data-target="#berita-delete" data-id="<?= str_replace('"', "'", $item['id']) ?>" data-post_title="<?= str_replace('"', "'", $item['post_title']) ?>" class="btn btn-danger"><i class="fas fa-trash"></i>
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