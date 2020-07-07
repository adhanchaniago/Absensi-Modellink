<section class="content">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Input Data Siswa</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="form-group row">
        <label for="nis" class=" col-sm-2">NIS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS 10 digit">
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class=" col-sm-2">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
        </div>
      </div>
      <div class="form-group row">
        <label for="no_hp" class=" col-sm-2">Nomor HP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="no_hp" placeholder="+62-812-3456-7890">
        </div>
      </div>

      <div class="form-group row">
        <label for="alamat" class=" col-sm-2">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
        </div>
      </div>
      <div class="form-group row">
        <label for="agama" class=" col-sm-2">Agama</label>
        <div class="col-sm-10">
          <select class="form-control" name="agama">
            <option value="" selected hidden>--Pilih Agama--</option>
            <option value="1">Islam</option>
            <option value="2">Kristen Protestan</option>
            <option value="3">Katolik</option>
            <option value="4">Hindu</option>
            <option value="5">Budha</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="tempat_lahir" class=" col-sm-2">Tempat/Tanggal Lahir</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
        </div>
        <div class="col-sm-5">
          <div class="input-group">
            <input type="text" class="form-control" id="lahirPegawai" name="tanggal_lahir" placeholder="20-02-2020" readonly>
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="gender" class=" col-sm-2">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-control" name="gender">
            <option value="" selected hidden>--Pilih Gender--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="status" class=" col-sm-2">Status</label>
        <div class="container row">
          <div class="col-sm-2">
            <input type="radio" name="status" value="PNS"> PNS
          </div>
          <div class="col-sm-2">
            <input type="radio" name="status" vlaue="Honorer"> Honorer
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12">
          <div class="col-sm-2 pull-right">
            <a class="btn btn-success btn-block" id="save">Simpan <i class="fa fa-send"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Command
    </div>
  </div>

  <!-- ============================= -->

  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Data Siswa</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-hover table-striped" id="dataSiswa">
        <thead>
          <th>No.</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>No. HP</th>
          <th>Alamat</th>
          <th>Agama</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </thead>
      </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Command
    </div>
  </div>
</section>
<script>
  $(function() {
    $('#dataSiswa').DataTable();
  });
</script>