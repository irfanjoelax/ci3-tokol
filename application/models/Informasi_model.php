<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_model extends CI_Model
{
  protected $table = 'informasi';

  public function findAll()
  {
    $this->db->order_by('id_inf', 'desc');
    return $this->db->get($this->table)->result_array();
  }

  public function find($where)
  {
    $this->db->where('id_inf', $where);
    return $this->db->get($this->table)->row_array();
  }

  public function save($data = array())
  {
    return $this->db->insert($this->table, $data);
  }

  public function update($where, $data)
  {
    $this->db->where('id_inf', $where);
    return $this->db->update($this->table, $data);
  }

  public function delete($where)
  {
    $this->db->where('id_inf', $where);
    return $this->db->delete($this->table);
  }
}

/* End of file Informasi_model.php */
