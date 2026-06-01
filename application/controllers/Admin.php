<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cekLogin();
    // if (!$this->session->userdata('nama_admin')) {
    //   redirect('auth/blocked');
    // }
    $this->load->model('Admin_model', 'Adm');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = "Halaman Admin";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // Hitung jumlah data pada tabel Gejala/Kerusakan/Pengetahuan
    $data['totalGejala'] = $this->Adm->CountGejala();
    $data['totalKerusakan'] = $this->Adm->CountKerusakan();
    $data['totalPengetahuan'] = $this->Adm->CountPengetahuan();
    $data['totalLaporan'] = $this->Adm->CountLaporan();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_Sidebar', $data);
    $this->load->view('templates/Admin_topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/Admin_footer');
  }

  public function profile()
  {
    $data['judul'] = "Halaman Profile Admin";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data['profile'] = $this->Adm->getAllProfile();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_Sidebar', $data);
    $this->load->view('templates/Admin_topbar', $data);
    $this->load->view('admin/profile/index', $data);
    $this->load->view('templates/Admin_footer');
    $this->load->view('admin/profile/modal_ubah_profile', $data);
  }

  public function ubahAdmin()
  {
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size']      = 4096;
      $config['upload_path'] = './assets/images/';
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors('', '') . '</div>');
        redirect('admin/profile');
        return;
      }

      $new_image = $this->upload->data('file_name');
      $this->db->set('image', $new_image);
    }

    $this->Adm->ubahAdmin();
    $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Data Admin Berhasil diubah!</div>'); //buat pesan akun berhasil dibuat
    redirect('Admin/Profile');
  }
}
