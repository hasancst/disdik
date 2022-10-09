<?= $this->include('Admin/Layout/Sidemenu') ?>
<style>
  #selengkapnya {
    display: none;
  }
</style>
<div class="card">
  <div class="card-header">
    <h4 class="m-0 font-weight-bold text-primary">Daftar Aktivitas Pengguna</h4>
  </div>
  <div class="card-body">
    <table id="tbInfo" class="table table-bordered table-hover">
      <thead>
        <th>No.</th>
        <th>Waktu</th>
        <th>IP Address</th>
        <th>Pengguna</th>
        <th>Lokasi</th>
        <th class="col-3">Keterangan</th>

      </thead>
      <tbody>
        <?PHP
        foreach ($data as $key => $item) {
        ?>
          <tr data-toggle="modal" id="logs" data-target="#logsdetails" data-ipaddress="<?= $item['ip_address'] ?>" data-user="<?= $item['user'] ?>" data-uri="<?= $item['uri'] ?>" data-method="<?= $item['method'] ?>" data-status="<?=
                                                                                                                                                                                                                                      str_replace('"', "'", $item['status']) ?>" data-timestamp="<?= $item['timestamp'] ?>">
            <td><?PHP echo $key + 1 ?></td>
            <td><?= $item['timestamp']; ?></td>
            <td><?= $item['ip_address']; ?></td>
            <td><?= $item['user']; ?></td>
            <td><?= $item['method'] . ' : ' . $item['uri']; ?></td>
            <td>
              <?php
              // echo $item['status']; 
              $konten = strip_tags($item['status']);
              $afterkonten = strip_tags($item['status']);
              $long = 150;
              $link = base_url('berita');
              if (strlen($konten) > $long) {
                $potongkonten   = substr($konten, 0, $long);
                $akhirspasi     = strrpos($potongkonten, ' ');
                $konten         = $akhirspasi ? substr($potongkonten, 0, $akhirspasi) : substr($potongkonten, 0);
              }
              $konten = str_replace('"', "'", $konten);
              echo $konten;

              ?>
              <span id="jagoankodeblog">...</span>
            </td>

          </tr>
        <?PHP
        }
        ?>

    </table>
  </div>

</div>
<?= $this->include('Admin/Layout/Footer') ?>