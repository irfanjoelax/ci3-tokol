<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
  protected $table = 'kategori';

  public function findAll()
  {
    $this->db->order_by('id_ktg', 'desc');
    return $this->db->get($this->table)->result_array();
  }

  public function find($where, $type)
  {
    if ($type == 'id') {
      $this->db->where('id_ktg', $where);
    } elseif ($type == 'slug') {
      $this->db->where('slug_ktg', $where);
    }

    return $this->db->get($this->table)->row_array();
  }

  public function save($data = array())
  {
    return $this->db->insert($this->table, $data);
  }

  public function update($where, $type, $data)
  {
    if ($type == 'id') {
      $this->db->where('id_ktg', $where);
    } elseif ($type == 'slug') {
      $this->db->where('slug_ktg', $where);
    }

    return $this->db->update($this->table, $data);
  }

  public function delete($where, $type)
  {
    if ($type == 'id') {
      $this->db->where('id_ktg', $where);
    } elseif ($type == 'slug') {
      $this->db->where('slug_ktg', $where);
    }

    return $this->db->delete($this->table);
  }
}

/* End of file Kategori_model.php */
