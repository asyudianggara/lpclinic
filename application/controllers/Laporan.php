<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cekLogin();
    $this->load->model('Laporan_model', 'ML');
  }

  public function index()
  {
    $data['judul'] = 'Halaman Laporan';
    $data['tabel'] = 'Data Laporan';

    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data['laporan'] = $this->ML->getAllLaporan();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_Sidebar', $data);
    $this->load->view('templates/Admin_topbar', $data);
    $this->load->view('admin/laporan/index', $data);
    $this->load->view('templates/Admin_footer');
  }

  // Hapus Laporan Individual
  public function hapus($id)
  {
    $this->ML->hapusLaporan($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Laporan Berhasil dihapus!</div>');
    redirect('laporan');
  }

  // Hapus Laporan Massal
  public function hapus_massal()
  {
    $ids_raw = $this->input->post('ids');
    if (!empty($ids_raw)) {
      $ids = explode(',', $ids_raw);
      $this->ML->hapusLaporanMassal($ids);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . count($ids) . ' Data Laporan Berhasil dihapus massal!</div>');
    } else {
      $ids = $this->input->post('id_hasil');
      if (!empty($ids)) {
        $this->ML->hapusLaporanMassal($ids);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . count($ids) . ' Data Laporan Berhasil dihapus massal!</div>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Tidak ada data laporan yang dipilih!</div>');
      }
    }
    redirect('laporan');
  }
}
