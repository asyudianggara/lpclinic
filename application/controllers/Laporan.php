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
}
