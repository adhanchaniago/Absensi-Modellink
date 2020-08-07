<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataSiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('user_m', 'admin_m'));
    if ($this->session->userdata('is_login') !== TRUE || $this->session->userdata('tipe') != 99) {
      $this->session->set_flashdata('failed', '<div class="alert alert-danger" role="alert">
                                       Maaf, Anda harus login!
                                       </div>');
      redirect('login');
    }
    //Do your magic here
  }

  public function index()
  {
    $id = $this->session->userdata('id_user');

    $this->load->view('backend/layouts/wrapper', [
      'content' => 'backend/admin/dataSiswa',
      'title'   => 'Data Siswa',
      'profile' => $this->user_m->profile($id),
      'agama' => $this->admin_m->getAgama(),
      'userdata' => $id
    ], FALSE);
  }

  public function addSiswa()
  {
  }
}

/* End of file DataSiswa.php */
