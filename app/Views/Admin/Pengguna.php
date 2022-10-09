  <?= $this->include('Admin/Layout/Sidemenu') ?>
      
      <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-10">
                      <h4 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h4>
                  </div>
                  <div class="col-md-2" style="text-align: end;">
                      <button type="submit" class=" btn btn-primary" href="#" data-toggle="modal" data-target="#user-tambah">Tambah Pengguna</button>
                  </div>
              </div>

          </div>
          <?php if (session()->getFlashdata('msg')) : ?>
              <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
          <?php endif; ?>
          <!-- /.card-header -->
          <div class="card-body">
              <table id="tbUser" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th style="width: 3%;">No.</th>
                          <th style="width: 10%;">Username</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Tipe</th>
                          <th style="text-align: center;">Status</th>
                          <th style="text-align: center;">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?PHP
                        foreach ($data as $key => $item) {
                        ?>
                          <tr>
                              <td><?PHP echo $key + 1 ?></td>
                              <td><?= $item['user_name']; ?></td>
                              <td><?= $item['user_full_name']; ?></td>
                              <td><?= $item['user_email']; ?></td>
                              <td><?= $item['user_type']; ?></td>
                              <td style="text-align: center;"><i class="fas fa-circle nav-icon 
                                        <?PHP

                                        if ($item['has_login'] == 'true') {
                                            echo 'text-success';
                                        } else {
                                            echo 'text-danger';
                                        }
                                        ?>"></i>
                              </td>

                              <td style="text-align: center;">

                                  <a data-toggle="modal" id="userresetpass" data-target="#user-resetpass" data-id="<?= $item['id']; ?>" data-name="<?= $item['user_name']; ?>" class="btn btn-warning" ?><i class="fas fa-key"></i></a>
                                  <a data-toggle="modal" id="usernonaktif" data-target="#user-nonaktif" data-id="<?= $item['id']; ?>" data-name="<?= $item['user_name']; ?>" data-isdel="<?= $item['is_deleted']; ?>" data-status="<?= $item['is_deleted'] == 'true' ? 'Aktif' : 'Non Aktif'; ?>" data-actstatus="<?= $item['is_deleted'] == 'true' ? 'Mengaktifkan' : 'Menonaktifkan'; ?>" class="btn 
                                  <?PHP
                                    if ($item['is_deleted'] == 'true') {
                                        echo ' btn-success';
                                    } else {
                                        echo ' btn-danger';
                                    }
                                    ?>">
                                      <i class="fas fa-power-off "></i>
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
  <?= $this->include('Admin/Layout/Footer') ?>