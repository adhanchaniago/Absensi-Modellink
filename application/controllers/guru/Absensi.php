<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('user_m', 'kelas_m'));
    if ($this->session->userdata('is_login') !== TRUE || $this->session->userdata('tipe') != 88) {
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
      'content' => 'backend/guru/absensi',
      'title' => 'Data Guru',
      'profile' => $this->user_m->profile($id),
      'kelas' => $this->kelas_m->getKelas(),
      'userdata' => $id
    ], FALSE);
  }
}

/* End of file Absensi.php */
