<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs (Pulled to the right) -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="pull-left header"><i class="fa fa-th"></i> Kelas</li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active">
            <form method="post">
              <center>
                <b>Absensi Siswa</b>
                <p class="text-muted">Pilih kelas</p>
                <select class="form-control" name="kelas" style="width:30%">
                  <option value="" slected hidden>--Pilih Kelas--</option>
                  <?php foreach($kelas as $val):?>
                    <option value="<?= $val->id_kelas?>"><?= $val->kelas; ?></option>
                  <?php endforeach; ?>
                </select>
                <br/>
                <button class="btn btn-success">Pilih</button>
              </center>
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>

    <!-- Absensi -->
    <div class="col-md-12">
      <!-- Custom Tabs (Pulled to the right) -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="pull-left header"><i class="fa fa-users"></i> Absensi</li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active">
            <form method="post">
              <table class="table table-hover table-striped">
                <thead>
                  <th>Tanggal</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php foreach($siswa as $sis):?>
                    <tr>
                      <td><?= date("d-m-Y")?></td>
                      <td><?= $sis->nis; ?></td>
                      <td><?= $sis->nama; ?></td>
                      <td>
                        <select class="form-control">
                          <option>Hadir</option>
                          <option>Alpha</option>
                          <option>Ijin</option>
                          <option>Sakit</option>
                        </select>
                      </td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
              <br/>
                <button class="btn btn-primary">Simpan</button>
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>
  </div>
</section>