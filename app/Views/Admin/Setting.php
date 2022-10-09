<?= $this->include('Admin/Layout/Sidemenu') ?>


<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Pengaturan</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="settingWeb" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="exampleInputFile">Logo Browser</label><br>
            <img id="showgambar" name="showgambar" src="<?= $logo == '' ? 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar' : 'Assets/settings/' . $setting_logo ?>" class="img-fluid mb-2" style="height:20vh" />
            <input type="file" accept="image/png, image/jpeg" name="logo" onchange="readURL(this)" id="logo" class="form-control-file border">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="exampleInputFile">Logo Website</label><br>
            <img id="showsublogo" name="showsublogo" src="<?= $sublogo == '' ? 'https://via.placeholder.com/300/b9acac/FFFFFF?text=Masukkan Gambar' : 'Assets/settings/' . $sublogo ?>" class="img-fluid mb-2" style="height:20vh" />
            <input type="file" accept="image/png, image/jpeg" name="sublogo" onchange="readURLs(this)" id="sublogo" class="form-control-file border">
          </div>

        </div>

      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#showlogo')
          .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }

  function readURLs(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#showsublogo')
          .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<?= $this->include('Admin/Layout/Footer') ?>