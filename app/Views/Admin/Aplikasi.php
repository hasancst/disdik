<?= $this->include('Admin/Layout/Sidemenu') ?>
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
        <h4 class="m-0 font-weight-bold text-primary">Daftar Aplikasi</h4>
      </div>
      <div class="col-md-2" style="text-align: end;">
        <button type="submit" class="btn btn-primary" href="#" data-toggle="modal" data-target="#app-create">Tambah Aplikasi</button>
      </div>
    </div>

  </div>
  <?php
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
          <th>Nama Aplikasi</th>
          <th>URL</th>
          <th>Gambar</th>
          <th style="width:8vw">aksi</th>
        </tr>
      </thead>
      <tbody>
        <?PHP
        foreach ($data as $key => $item) {
        ?>
          <tr>
            <td><?PHP echo $key + 1 ?></td>
            <td><?= $item['module_name']; ?></td>
            <td><?= $item['module_url']; ?></td>

            <td><img src="<?= $item['module_img'] ? 'Assets/aplikasi/' . $item['module_img'] : 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Kosong' ?>" style="width: 10vw;"></td>
            <td style=" line-height:1">
              <a data-toggle="modal" id="appinfo" data-target="#app-info" data-id="<?= $item['id']?>" data-name="<?= $item['module_name']?>" data-url="<?= $item['module_url']?>" data-img="<?= $item['module_img']?>"class="btn btn-primary"><i class="fas fa-info"></i></a>
              <a data-toggle="modal" id="appedit" data-target="#app-edit" data-id="<?= $item['id']?>" data-name="<?= $item['module_name']?>" data-url="<?= $item['module_url']?>" data-img="<?= $item['module_img']?>"class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <a data-toggle="modal" id="appdel" data-target="#app-delete" data-id="<?= $item['id']?>" data-name="<?= $item['module_name']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>



            </td>
          </tr>
        <?PHP
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>


<!-- ./row -->
<!-- /.container-fluid -->

<!-- /.content -->
<?= $this->include('Admin/Layout/Footer') ?>