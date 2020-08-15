<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Toko_model extends CI_Model
{
  protected $table = 'toko';
  protected $id = 1;

  public function find()
  {
    $this->db->where('id_tk', $this->id);
    return $this->db->get($this->table)->row_array();
  }

  public function update($data)
  {
    $this->db->where('id_tk', $this->id);
    return $this->db->update($this->table, $data);
  }
}

/* End of file Toko_model.php */
