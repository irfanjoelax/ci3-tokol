<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$parsing['title'] = TITLE . ' | Selamat Datang';
		$parsing['toko']	= $this->m_toko->find();
		$this->load->view('web/v_beranda', $parsing);
	}
}
