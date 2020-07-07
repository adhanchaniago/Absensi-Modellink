<section class="content">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">
          Data Guru
        </h3>
        <div class="pull-right box-tools">
          <a href="<?= site_url('add-guru'); ?>" class="btn btn-success">Tambah <i class="fa fa-users"></i></a>
        </div>
      </div>
      <!-- <form action=""> -->
      <div class="box-body">
        <table class="table table-bordered table-hover nowrap" id="guru" style="width:100%">
          <thead>
            <th>No.</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>No.HP</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Aksi</th>
          </thead>
        </table>
      </div>
      <!-- </form> -->
    </div>
  </div>
</section>
<script>
  // var tableGuru;

  // function reload_table() {
  //   tableGuru.ajax.reload(null, false); //reload datatable ajax 
  // }

  $(function() {
    $('#guru').DataTable();
  })
</script>