<?php
class Pegawai extends CI_controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Master', 'mastermodel');
  }
  function index()
  {
    $data['tampilpegawai'] = $this->mastermodel->tampilpegawai();
    $this->load->view('FormPegawai', $data);
  }
  function insertpegawai()
  {
    $data = array(
      'employee_name' => $this->input->post('namapegawai'),
      'employee_salary' => $this->input->post('gaji'),
      'employee_age' => $this->input->post('Umur'),
      'profile_image' => $this->input->post('profilimage')
    );
    $this->mastermodel->insertpegawai($data);
    $this->session->set_flashdata('messagemaster', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Tambah Data Pegawai Berhasil !</div>');
    redirect(base_url(''));
  }
}
