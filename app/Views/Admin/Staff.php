<?= $this->include('Admin/Layout/Sidemenu') ?>
<style>
  .table td,
  .table th {
    text-transform: uppercase;
  }
</style>
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
        <h4 class="m-0 font-weight-bold text-primary">Daftar Staff</h4>
      </div>
      <div class="col-md-2" style="text-align: end;">
        <button type="submit" class="btn btn-primary" href="#" data-toggle="modal" data-target="#tambahstaff">Tambah Staff</button>
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
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Posisi atasan</th>
          <th style="width:7em">aksi</th>
        </tr>
      </thead>
      <tbody>
        <?PHP
        foreach ($data as $key => $item) {
        ?>
          <tr>
            <td><?PHP echo $key + 1 ?></td>
            <td><?= $item['full_name']; ?></td>
            <td style="text-transform: uppercase;"><?php
                                                    if ($item['name'] == 'kabid') {
                                                      echo 'Kepala Bidang ' . $item['description'];
                                                    } else if ($item['name'] == 'kasi') {
                                                      echo 'Kepala Seksi ' . $item['description'];
                                                    } else {
                                                      echo $item['description'];
                                                    } ?></td>

            <td><?php
                $root = '';
                $jab = '';
                // echo array_search($item['root'], array_column($org,'id')).'<br>';

                foreach ($data as $key2 => $value2) {
                  if ($value2['id_org'] == $item['root']) {
                    $root = $value2['full_name'];
                    $jab = $value2['description'];
                  }
                }
                echo $root;
                ?></td>
            <td style=" line-height:1">

              <a data-toggle="modal" id="staffinfo" data-target="#staff-info" data-name="<?= $item['full_name'] ?>" data-nip="<?= $item['nip'] ?>" data-nik="<?= $item['nik'] ?>" data-jabatan="<?php
                                                                                                                                                                                                if ($item['name'] == 'kabid') {
                                                                                                                                                                                                  echo 'Kepala Bidang ' . $item['description'];
                                                                                                                                                                                                } else if ($item['name'] == 'kasi') {
                                                                                                                                                                                                  echo 'Kepala Seksi ' . $item['description'];
                                                                                                                                                                                                } else {
                                                                                                                                                                                                  echo $item['description'];
                                                                                                                                                                                                } ?>" data-atasan="<?= $jab . ' - ' . $root  ?>" class="btn btn-primary"><i class="fas fa-info"></i></a>
              <a data-toggle="modal" id="staffedit" data-target="#staff-edit" data-id="<?= $item['id'] ?>" data-poto="<?= $item['photo'] ?>" data-idorg="<?= $item['id_org'] ?>" data-name="<?= $item['full_name'] ?>" data-nip="<?= $item['nip'] ?>" data-nik="<?= $item['nik'] ?>" data-bidang="<?= $item['description'] ?>" data-jabatan="<?php
                                                                                                                                                                                                                                                                                                                                              if ($item['name'] == 'kabid') {
                                                                                                                                                                                                                                                                                                                                                echo 'Kepala Bidang';
                                                                                                                                                                                                                                                                                                                                              } else if ($item['name'] == 'kasi') {
                                                                                                                                                                                                                                                                                                                                                echo 'Kepala Seksi';
                                                                                                                                                                                                                                                                                                                                              } else {
                                                                                                                                                                                                                                                                                                                                                echo $item['description'];
                                                                                                                                                                                                                                                                                                                                              } ?>" data-inti=<?= $item['name'] ?> data-atasan="<?= $item['root'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <a data-toggle="modal" id="staffdel" data-target="#staff-delete" data-id="<?= $item['id'] ?>" data-idorg="<?= $item['id_org'] ?>" data-name="<?= $item['full_name'] ?>" class="btn btn-danger" <?php
                                                                                                                                                                                                              $index = 0;
                                                                                                                                                                                                              foreach ($data as $key => $value) {
                                                                                                                                                                                                                if ($value['root'] == $item['id_org']) {
                                                                                                                                                                                                                  $index++;
                                                                                                                                                                                                                }
                                                                                                                                                                                                              }
                                                                                                                                                                                                              if ($index != 0 || $item['name'] == 'pimpinan' || $item['name'] == 'kepala1' || $item['name'] == 'kasub') {
                                                                                                                                                                                                                echo 'hidden';
                                                                                                                                                                                                              }
                                                                                                                                                                                                              ?>><i class="fas fa-trash"></i></a>
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