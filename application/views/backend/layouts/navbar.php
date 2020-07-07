<header class="main-header">
  <!-- Logo -->
  <a href="<?= $site; ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>AB</b>M</span>
    <!-- logo for regular state and mobile devices -->
    <!-- <img src="<?= base_url() ?>assets/gambar/logo/logo.png" class="" style="max-width:50%;"> -->
    <span class="logo-lg">Absensi Modellink</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs"><?= $profile->username; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?= base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              <p>
                <?= $profile->nama; ?> - <?php if ($profile->tipe == 99) {
                                            echo 'Admin';
                                          }
                                          if ($profile->tipe == 88) {
                                            echo 'Guru';
                                          }
                                          if ($profile->tipe == 77) {
                                            echo 'Sekretaris';
                                          } ?>
                <small>NIP. <?= $profile->nip; ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?= site_url('logout'); ?>" class="btn btn-danger btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>