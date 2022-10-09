<?= $this->include('Admin/Layout/Sidemenu') ?>
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
        <h4 class="m-0 font-weight-bold text-primary">Daftar Pojok IT</h4>
      </div>
      <div class="col-md-2" style="text-align: end;">
        <button type="submit" class="btn btn-primary" href="#" data-toggle="modal" data-target="#infoit-create">Tambah Pojok IT</button>
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
          <th>aksi</th>
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

            <td><img src="<?= $item['post_image'] ? 'Assets/post/' . $item['post_image'] : 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Kosong' ?>" width="180" height="90"></td>
            <td style="text-align: center;">
              <a data-toggle="modal" id="itinfo" data-target="#infoit-info" data-id="<?= $item['id'] ?>" data-post_title="<?= $item['post_title'] ?>" data-post_content='<?= $item['post_content'] ?>' data-post_image="<?= $item['post_image'] ?>" data-post_author="<?= $item['post_author'] ?>" data-post_categories="<?= $item['post_categories'] ?>" data-post_type="<?= $item['post_type'] ?>" data-post_status="<?= $item['post_status'] ?>" data-post_visibility="<?= $item['post_visibility'] ?>" data-post_comment_status="<?= $item['post_comment_status'] ?>" data-post_slug="<?= $item['post_slug'] ?>" data-post_tags="<?= $item['post_tags'] ?>" data-post_counter="<?= $item['post_counter'] ?>" data-created_at="<?= date('d M Y h:i:s', strtotime($item['created_at'])) ?>" data-updated_at="<?= $item['updated_at'] ?>" data-deleted_at="<?= $item['deleted_at'] ?>" data-restored_at="<?= $item['restored_at'] ?>" data-created_by="<?= $item['created_by'] ?>" data-updated_by="<?= $item['updated_by'] ?>" data-deleted_by="<?= $item['deleted_by'] ?>" data-restored_by="<?= $item['restored_by'] ?>" class="btn btn-primary" ?><i class="fas fa-info"></i></a>
              <a data-toggle="modal" id="itedit" data-target="#infoit-edit" data-id="<?= $item['id'] ?>" data-post_title="<?= $item['post_title'] ?>" data-post_content='<?= $item['post_content'] ?>' data-post_image="<?= $item['post_image'] ?>" data-post_author="<?= $item['post_author'] ?>" data-post_categories="<?= $item['post_categories'] ?>" data-post_type="<?= $item['post_type'] ?>" data-post_status="<?= $item['post_status'] ?>" data-post_visibility="<?= $item['post_visibility'] ?>" data-post_comment_status="<?= $item['post_comment_status'] ?>" data-post_slug="<?= $item['post_slug'] ?>" data-post_tags="<?= $item['post_tags'] ?>" data-post_counter="<?= $item['post_counter'] ?>" data-created_at="<?= date('d M Y h:i:s', strtotime($item['created_at'])) ?>" data-updated_at="<?= $item['updated_at'] ?>" data-deleted_at="<?= $item['deleted_at'] ?>" data-restored_at="<?= $item['restored_at'] ?>" data-created_by="<?= $item['created_by'] ?>" data-updated_by="<?= $item['updated_by'] ?>" data-deleted_by="<?= $item['deleted_by'] ?>" data-restored_by="<?= $item['restored_by'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i>
                <a data-toggle="modal" id="itdel" data-target="#infoit-delete" data-id="<?= $item['id'] ?>" data-post_title="<?= $item['post_title'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i>
                </a>

            </td>
          </tr>
        <?PHP
        }
        ?>

    </table>
  </div>
</div>

<?= $this->include('Admin/Layout/Footer') ?>