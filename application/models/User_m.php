<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
  // public function profile($id)
  // {
  //   $this->db->select('*');
  //   $this->db->from('user u');
  //   $this->db->join('mapel m', 'u.id_mapel = m.id_mapel');
  //   $this->db->where('u.id_user', $id);
  //   return $this->db->get()->row();
  // }

  public function profile($id)
  {
    $this->db->join('mapel m', 'user.id_mapel = m.id_mapel', 'left');
    return $this->db->get_where('user',['id_user' => $id])->row();
  }
}

/* End of file Admin_m.php */
