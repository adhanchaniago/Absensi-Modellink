<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
  public function profile($id)
  {
    $this->db->select('*');
    $this->db->from('user u');
    $this->db->join('mapel m', 'u.id_mapel = m.id_mapel');
    $this->db->where('id_user', $id);
    return $this->db->get()->row();
  }
}

/* End of file Admin_m.php */
