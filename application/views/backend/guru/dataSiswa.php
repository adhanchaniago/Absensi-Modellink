<section class="content">
  <div class="box box-default">
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
      SMK Modellink
    </div>
  </div>
</section>
<script>
  $(function() {
    $('#dataSiswa').DataTable();
  });
</script>