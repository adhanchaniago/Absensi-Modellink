<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_m extends CI_Model
{

  /**
   * @author Taraz14(Meliodas)
   * Save Kelas
   */
  public function saveKelas($data)
  {
    $this->db->insert('kelas', $data);
    return $this->db->insert_id();
  }

  /**
   * Hapus Kelas
   */
  public function hapusKelas($id)
  {
    $this->db->where('id_kelas', $id);
    $this->db->delete('kelas');
  }

  /**
   * Datatables Query
   */
  private function queryKelas()
  {
    $this->db->select('*');
    $this->db->from('kelas k');
    $this->db->join('user u', 'k.id_user = u.id_user', 'left');

    if ($this->input->get('search')['value']) {
      $this->db->like('kelas', $this->input->get('search')['value']);
      $this->db->or_like('u.nama', $this->input->get('search')['value']);
    }

    if ($this->input->get('order')) {
      $this->db->order_by(
        $this->input->get('order')['0']['column'],
        $this->input->get('order')['0']['dir']
      );
    } else {
      $this->db->order_by('id_kelas', 'desc');
    }
  }

  public function dataKelas()
  {
    self::queryKelas();
    if ($this->input->get('length') !== -1) {
      $this->db->limit($this->input->get('length'), $this->input->get('start'));
    }
    return $this->db->get()->result();
  }

  public function filtered()
  {
    self::queryKelas();
    return $this->db->get()->num_rows();
  }

  public function countAll()
  {
    $this->db->from('kelas');
    return $this->db->count_all_results();
  }
}

/* End of file Kelas_m.php */
