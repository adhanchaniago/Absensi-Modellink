<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Absensi_m Class
 * 
 * Class untuk mengatur data alternatif
 *
 * @package		absensi
 * @subpackage	Model
 * @category	Absensi_m
 * @author  	Fitri
 */

class Absensi_m extends CI_Model
{
  /**
   * Minimal Limit
   */
  const MIN_LIMIT = 1;

  /**
   * Instansiasi variable $db
   * 
   * @var object
   */
  private static $db;

  /**
   * Instansiasi variable input
   * 
   * @var array
   */
  private static $input;

  /**
   * Magic constructor
   */
  public function __construct()
  {
    parent::__construct();

    /**
     * Set value varible $db
     * @var object
     */
    self::$db = &get_instance()->db;

    /**
     * Set value varible $input
     * @var array
     */
    self::$input = &get_instance()->input;
  }

  public function getAbsen($kelas, $mapel, $bulan)
  {
    if ($kelas == NULL && $mapel == NULL) {
      return static::$db->query("SELECT id_siswa, tanggal, bulan, tahun, id_kelas, id_mapel, time_in, keterangan,
                        COUNT(IF(keterangan='Sakit', 1, NULL)) as tSakit,
                        COUNT(IF(keterangan='Alpha', 1, NULL)) as tAlpha,
                        COUNT(IF(keterangan='Ijin', 1, NULL)) as tIjin,
                        COUNT(IF(keterangan='Hadir', 1, NULL)) as tHadir
                        FROM absensi")->result();
    } else {
      return static::$db->query("SELECT id_siswa, tanggal, bulan, tahun, id_kelas, id_mapel, time_in, keterangan,
                        COUNT(IF(keterangan='Sakit', 1, NULL)) as tSakit,
                        COUNT(IF(keterangan='Alpha', 1, NULL)) as tAlpha,
                        COUNT(IF(keterangan='Ijin', 1, NULL)) as tIjin,
                        COUNT(IF(keterangan='Hadir', 1, NULL)) as tHadir
                        FROM absensi
    WHERE (id_kelas = " . $kelas . " AND id_mapel = " . $mapel . " AND bulan IN ('08', '09', '10'))")->result();
    }
  }

  public function getBulan($kelas, $mapel)
  {
    $where = ['id_kelas' => $kelas, 'id_mapel' => $mapel];
    $this->db->group_by('bulan');
    return $this->db->get_where('absensi', $where)->result();
  }
}

/* End of file Absensi_m.php */
