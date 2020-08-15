<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs (Pulled to the right) -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">

          <?php
          $no = 0;
          foreach ($kelas as $val) : ?>
            <li class=""><a href="#tab_<?= $no++; ?>" data-toggle="tab" aria-expanded="false"><?= $val->kelas ?></a></li>

          <?php
          endforeach;
          ?>
          <li class="pull-left header"><i class="fa fa-th"></i> Kelas</li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active">
            <center>
              <b>Absensi Siswa</b>
              <p class="text-muted">Pilih kelas pada tab di atas</p>
            </center>
          </div>
          <div class="tab-pane" id="tab_0">
            <b>How to use:</b>


          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_1">
            The European languages are members of the same family. Their separate existence is a myth.
            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
            in their grammar, their pronunciation and their most common words. Everyone realizes why a
            new common language would be desirable: one could refuse to pay expensive translators. To
            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
            words. If several languages coalesce, the grammar of the resulting language is more simple
            and regular than that of the individual languages.
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>
  </div>
</section>