<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('conf');
	}

	public function index()
	{
		$data['data'] = $this->conf->get_all('b_transaksi');

		$this->load->view('cetak', $data);
	}

}
