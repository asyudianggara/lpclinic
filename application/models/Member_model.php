<?php
class Member_model extends CI_model
{
  // menampilkan seluruh data gejala yang ada di tabel gejala.
  public function Gejala()
  {
    return $this->db->get('tbl_gejala')->result_array();
  }

  // Menampilkan riwayat diagnosa milik member tertentu
  public function getRiwayatMember($nama_user)
  {
    $this->db->where('nama_user', $nama_user);
    $this->db->order_by('waktu', 'DESC');
    return $this->db->get('tbl_hasil_diagnosa')->result_array();
  }
}
