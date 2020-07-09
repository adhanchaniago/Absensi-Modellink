<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">
            Tambah Guru
          </h3>
        </div>
        <form action="<?= site_url('admin/DataGuru/saveGuru'); ?>" method="post" id="form-guru">
          <div class="box-body">
            <div class="form-group row">
              <label for="nip" class=" col-sm-2">NIP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP 18 digit">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class=" col-sm-2">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="form-group row">
              <label for="username" class=" col-sm-2">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Username">
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
                  <input type="text" class="form-control" id="lahirGuru" name="tanggal_lahir" placeholder="20-02-2020" readonly>
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
                <label class="col-sm-4 "></label>
                <div class="row">
                  <div class="col-sm-2">
                    <a class="btn btn-success btn-block" id="save">Simpan <i class="fa fa-send"></i></a>
                  </div>
                  <div class="col-sm-2">
                    <a href="<?= site_url('data-guru'); ?>" class="btn btn-danger btn-block">Kembali <i class="fa fa-chevron-left"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<script>
  $(function() {
    //ajax save
    $('#save').click(function() {
      var data = new FormData($('#form-guru')[0]);
      $.ajax({
        type: 'post',
        url: '<?= site_url('admin/DataGuru/saveGuru') ?>',
        contentType: false,
        processData: false,
        dataType: 'json',
        data: data,
        success: function(data) {
          console.log(data);
          if (data.status == true) {
            swal({
              title: 'Tambah Guru',
              text: 'Guru berhasil ditambahkan',
              icon: 'success'
            });
          } else {
            swal({
              title: 'Gagal',
              text: 'Tidak diketahui',
              icon: 'error',
              dangerMode: 'true'
            })
          }
        }

      })
    })

    //pegawai borndate
    $('#lahirGuru').datepicker({
      format: "dd-mm-yyyy"
    });
  })
</script>