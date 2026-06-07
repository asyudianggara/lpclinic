<?php
class Laporan_model extends CI_model
{

  public function getAllLaporan()
  {
    return $this->db->get('tbl_hasil_diagnosa')->result_array();
  }

  public function hapusLaporan($id)
  {
    $this->db->delete('tbl_hasil_diagnosa', ['id_hasil' => $id]);
  }

  public function hapusLaporanMassal($ids)
  {
    if (!empty($ids)) {
      $this->db->where_in('id_hasil', $ids);
      $this->db->delete('tbl_hasil_diagnosa');
    }
  }
}
