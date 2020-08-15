<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
  protected $table = 'user';

  public function save($data = array())
  {
    return $this->db->insert($this->table, $data);
  }

  public function getEmail($email)
  {
    $this->db->where('email_usr', $email);
    return $this->db->get($this->table)->row_array();
  }
}

/* End of file User_model.php */
