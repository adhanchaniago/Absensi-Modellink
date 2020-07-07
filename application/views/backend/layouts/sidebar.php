<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel text-center">
      <!-- <div class="pull-left image">
        <img src="<?= base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $profile->nama; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div> -->
      <img src="<?= base_url() ?>assets/gambar/logo/logo.png" class="" style="max-width:50%;">

    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU UTAMA</li>
      <li class="<?php if ($this->uri->segment(1) == 'admin') {
                    echo 'active';
                  } ?>">
        <a href="<?= site_url('admin'); ?>">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
      </li>
      <li class="<?php if ($this->uri->segment(1) == 'data-guru' || $this->uri->segment(2) == 'add-guru') {
                    echo 'active';
                  } ?>">
        <a href="<?= site_url('data-guru'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Guru</span>
        </a>
      </li>
      <li class="<?php if ($this->uri->segment(1) == 'data-siswa' || $this->uri->segment(2) == 'add-siswa') {
                    echo 'active';
                  } ?>">
        <a href="<?= site_url('data-siswa'); ?>">
          <i class="fa fa-users"></i> <span>Data Siswa</span>
        </a>
      </li>
      <li class="<?php if ($this->uri->segment(1) == 'data-sekretaris') {
                    echo 'active';
                  } ?>">
        <a href="<?= site_url('data-sekretaris'); ?>">
          <i class="fa fa-sticky-note"></i>
          <span>Data Sekretaris</span>
        </a>
      </li>
      <li class="<?php if ($this->uri->segment(1) == 'data-rekap') {
                    echo 'active';
                  } ?>">
        <a href="<?= site_url('data-rekap'); ?>">
          <i class="fa fa-files-o"></i>
          <span>Data Rekap</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>