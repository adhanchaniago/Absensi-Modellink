<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
  private $user = 'user';

  public function profile($id)
  {
    return $this->db->get_where($this->user, ['id_user' => $id])->row();
  }
}

/* End of file Admin_m.php */
