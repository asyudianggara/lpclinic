<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Diagnosa_model', 'DM');
    $this->load->model('Laporan_model', 'ML');
  }

  public function hasil()
  {
    $gejala = $this->input->post('id_gejala');
    if (empty($gejala)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Silakan pilih minimal satu gejala terlebih dahulu.</div>');
      redirect('member/diagnosa');
      return;
    }

    $this->DM->kosongTmpGejala();
    $this->DM->kosongTmpFinal();
    $this->DM->insertTmpGejala();

    $tmpGejala = $this->DM->insertTmpFinal();
    $tmpFinal = array_map(function ($row) {
      $row['hasil_probabilitas'] = 0;
      return $row;
    }, $tmpGejala);
    $this->db->insert_batch('tmp_final', $tmpFinal);

    // Proses Perhitungan
    $probK1 = $this->DM->ProbK1();
    $probK2 = $this->DM->ProbK2();
    $probK3 = $this->DM->ProbK3();
    $probK4 = $this->DM->ProbK4();
    $probK5 = $this->DM->ProbK5();

    $data = [
      'K1' => $probK1,
      'K2' => $probK2,
      'K3' => $probK3,
      'K4' => $probK4,
      'K5' => $probK5
    ];
    $jmlProb = array_sum($data);
    if ($jmlProb == 0) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Hasil diagnosa tidak dapat dihitung, silakan pilih gejala lain.</div>');
      redirect('member/diagnosa');
      return;
    }

    $K1 = ($probK1 / $jmlProb);
    $K2 = ($probK2 / $jmlProb);
    $K3 = ($probK3 / $jmlProb);
    $K4 = ($probK4 / $jmlProb);
    $K5 = ($probK5 / $jmlProb);



    $this->DM->hasilProbK1($K1);
    $this->DM->hasilProbK2($K2);
    $this->DM->hasilProbK3($K3);
    $this->DM->hasilProbK4($K4);
    $this->DM->hasilProbK5($K5);

    //insert hasil dari diagnosa
    $this->DM->insertHasil();
    redirect('member/hasil_diagnosa');
  }
}
