<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataGuru extends CI_Controller
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
      'content' => 'backend/admin/dataGuru',
      'title' => 'Data Guru',
      'profile' => $this->user_m->profile($id),
      'userdata' => $id
    ], FALSE);
  }

  public function addGuru()
  {
    $id = $this->session->userdata('id_user');
    $this->load->view('backend/layouts/wrapper', [
      'content' => 'backend/admin/addGuru',
      'title' => 'Tambah Guru',
      'profile' => $this->user_m->profile($id),
      'userdata' => $id
    ], FALSE);
  }

  public function saveGuru()
  {
    $id = $this->session->userdata('id_user');
    $input = $this->input->post();
    $getTanggal = explode('-', $input['tanggal_lahir']);
    $pass = $getTanggal['0'] . $getTanggal['1'] . $getTanggal['2'];
    // $tglLahir = $getTanggal[2] . '-' . $getTanggal[1] . '-' . $getTanggal[0];
    $data = [
      // 'id' => $input['pendidikan'],
      'nip'           => $input['nip'],
      'nama'          => $input['nama'],
      'username'      => $input['username'],
      'password'      => password_hash($pass, PASSWORD_DEFAULT),
      'no_hp'         => $input['no_hp'],
      'alamat'        => $input['alamat'],
      'tempat_lahir' => $input['tempat_lahir'],
      'tanggal_lahir' => $input['tanggal_lahir'],
      'jenis_kelamin' => $input['gender'],
      'status'        => $input['status'],
      'file'        => NULL,
      'tipe'        => 88,
      'submit_at'     => time()
    ];

    $this->admin_m->saveGuru($data);
    echo json_encode(['status' => TRUE]);
  }
}

/* End of file DataGuru.php */
