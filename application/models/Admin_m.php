<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{
  public function saveGuru($data)
  {
    $this->db->insert('user', $data);
    return $this->db->insert_id();
  }
}

/* End of file Admin_m.php */
