<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Iklan_model extends CI_Model
{
  protected $table = 'toko';

  public function find($id)
  {
    $this->db->where('id_tk', $id);
    return $this->db->get($this->table)->row_array();
  }

  public function update($data)
  {
    $this->db->where('id_tk', $this->id);
    return $this->db->update($this->table, $data);
  }
}

/* End of file Iklan_model.php */
