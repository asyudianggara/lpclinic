<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
    $this->load->model('Member_model', 'MM');
    $this->load->model('Diagnosa_model', 'DM');
  }

  public function index()
  {
    $data['judul'] = "Halaman Member";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $this->load->view('templates/Member_Header', $data);
    $this->load->view('member/index', $data);
    $this->load->view('templates/Member_Footer');
  }

  public function diagnosa()
  {
    $data['judul'] = "Daftar Gejala";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $data['gejala'] = $this->MM->Gejala();

    $this->load->view('templates/Member_Header', $data);
    $this->load->view('member/diagnosa', $data);
    $this->load->view('templates/Member_Footer');
  }

  public function hasil_diagnosa()
  {
    $data['judul'] = "Halaman Hasil Diagnosa";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    // Hasil Diagnosa Akhir
    // Hasil 3 Kerusakan dengan prob tertinggi
    $data['diagnosa'] =  $this->DM->diagnosa();
    // Hasil Kerusakan dengan prob paling tinggi
    $data['tertinggi'] = $this->DM->tertinggi();
    // Detail Hasil Diagnosa
    $data['detail'] = $this->DM->detailDiagnosa();

    $data['kerusakan'] = $this->db->get('tbl_kerusakan')->result_array();

    $this->load->view('templates/Hasil_Header', $data);
    $this->load->view('member/hasil_diagnosa', $data);
    $this->load->view('templates/Hasil_Footer');
  }

  public function profile()
  {
    $data['judul'] = "Halaman Profile Member";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    
    // Fetch riwayat diagnosa for this member
    $data['riwayat'] = $this->MM->getRiwayatMember($data['user']['nama_user']);

    $this->load->view('templates/Member_Header', $data);
    $this->load->view('member/profile', $data);
    $this->load->view('templates/Member_Footer');
  }

  public function ubahMember()
  {
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();
    $id_user = $data['user']['id_user'];
    $old_nama = $data['user']['nama_user'];

    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size']      = 4096;
      $config['upload_path'] = './assets/images/';
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors('', '') . '</div>');
        redirect('member/profile');
        return;
      }

      $new_image = $this->upload->data('file_name');
      $this->db->set('image', $new_image);
    }

    $nama_user = $this->input->post('nama', true);
    $username = $this->input->post('username', true);

    $this->db->set('nama_user', $nama_user);
    $this->db->set('username', $username);
    $this->db->where('id_user', $id_user);
    $this->db->update('tbl_user');

    // Update also nama_user in tbl_hasil_diagnosa so history is preserved
    if ($old_nama !== $nama_user) {
      $this->db->set('nama_user', $nama_user);
      $this->db->where('nama_user', $old_nama);
      $this->db->update('tbl_hasil_diagnosa');
    }

    // Update session userdata with new username
    $this->session->set_userdata('username', $username);

    $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Data Profile Berhasil diubah!</div>');
    redirect('member/profile');
  }
}
