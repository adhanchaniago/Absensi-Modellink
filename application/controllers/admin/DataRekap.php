<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataRekap extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('user_m', 'absensi_m', 'kelas_m', 'mapel_m'));
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
    $kelas = $this->input->post('kelas');
    $mapel = $this->input->post('mapel');
    // $kelas = 2;
    // $mapel = 1;

    $this->load->view('backend/layouts/wrapper', [
      'content' => 'backend/admin/dataRekap',
      'title'   => 'Rekap Bulanan',
      'profile' => $this->user_m->profile($id),
      'userdata' => $id,
      'absensi' => $this->absensi_m->getAbsen($kelas, $mapel),
      'kelas' => $this->kelas_m->getKelas(),
      'mapel' => $this->mapel_m->getMapel(),
    ], FALSE);
  }
}

/* End of file DataRekap.php */
