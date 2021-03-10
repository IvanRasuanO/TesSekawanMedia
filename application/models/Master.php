<?php

class Master extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function insertpegawai(array $post)
  {
    $data = array(
      'employee_name' => $post['employee_name'],
      'employee_salary' => $post['employee_salary'],
      'employee_age' => $post['employee_age'],
      'profile_image' => $post['profile_image']
    );
    $this->db->insert('pegawai', $data);
  }
  function tampilpegawai()
  {
    $this->db->select('*');
    $this->db->from('pegawai');
    $this->db->order_by('employee_name', 'ASC');
    $query = $this->db->get();
    return $query->result();
  }
}
