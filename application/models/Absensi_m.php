<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_m extends CI_Model
{
  public function getAbsen($kelas, $mapel)
  {
    // $this->db->select('(SELECT id_absensi, COUNT(*) AS total, 
    //                   COUNT(case when keterangan = "Sakit" then 1 else 0 end) AS s,
    //                   COUNT(case when keterangan = "Alpha" then 1 else 0 end) AS a,
    //                   COUNT(case when keterangan = "Ijin" then 1 else 0 end) AS i
    //                   FROM absensi)');
    $this->db->select('*');
    $this->db->from('absensi');
    $where = ['id_kelas' => $kelas, 'id_mapel' => $mapel];
    $this->db->where($where);
    return $this->db->get()->result();
  }

  public function getTanggal($tgl)
  {
    return $this->db->get_where('absensi', $tgl)->result();
  }
}

/* End of file Absensi_m.php */
