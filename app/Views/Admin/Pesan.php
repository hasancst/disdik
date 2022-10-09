<?= $this->include('Admin/Layout/Sidemenu') ?>

<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
        <h4 class="m-0 font-weight-bold text-primary">Daftar Kritik/Pesan/Saran</h4>
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
    <table id="tbPesan" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No.</th>
          <th>Waktu</th>
          <?= $type == 'super_user' ? "<th>IP Address</th>" : '' ?>

          <th>Nik</th>
          <th>Nama</th>
        </tr>
      </thead>
      <?PHP
      foreach ($dataPesan as $key => $item) {
      ?>
        <tr data-toggle="modal" id="Pesan_Baca" data-target="#PesanBaca" data-nik="<?= $item['nik'] ?>" data-name="<?= $item['fullname'] ?>" data-email="<?= $item['email'] ?>" data-msg="<?= str_replace('"', "'", $item['message']) ?>">
          <td><?PHP echo $key + 1 ?></td>
          <td><?= $item['created_at']; ?></td>
          <?= $type == 'super_user' ? "<td>" . $item['ip_address'] . "</td>" : '' ?>

          <td><?= $item['nik']; ?></td>
          <td><?= $item['fullname']; ?></td>
          <!-- <td><?= $item['message']; ?></td> -->

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