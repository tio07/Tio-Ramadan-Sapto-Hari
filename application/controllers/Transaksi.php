<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('conf');
	}

	public function index()
	{
		$data['data'] = $this->conf->get_all('b_transaksi');

		$this->load->view('transaksi', $data);
	}

	public function add()
	{
		if($this->input->post('submit', TRUE) == 'submit')
		{

			$this->form_validation->set_rules('nasabah', 'nasabah', 'required');
			$this->form_validation->set_rules('id_perkiraan', 'id_perkiraan', 'required');
			$this->form_validation->set_rules('jumlah', 'jumlah', 'required');

			if ($this->form_validation->run() == TRUE)
			{
				$transaksi = array(
					'nasabah' => $this->input->post('nasabah', TRUE),
					'id_perkiraan' => $this->input->post('id_perkiraan', TRUE),
					'jumlah' => $this->input->post('jumlah', TRUE),
				);

				$this->conf->insert('b_transaksi', $transaksi);

				redirect('transaksi');
			}
		}

		$data['nasabah'] = $this->input->post('nasabah', TRUE);
		$data['id_perkiraan'] = $this->input->post('id_perkiraan', TRUE);
		$data['jumlah'] = $this->input->post('jumlah', TRUE);
		$data['perkiraan'] = $this->conf->get_all('b_perkiraan');

		$this->load->view('form_transaksi', $data);
	}

	public function update()
	{
		$id_transaksi = $this->uri->segment(3);

		if($this->input->post('submit', TRUE) == 'submit'){
			$this->form_validation->set_rules('nasabah', 'nasabah', 'required');
			$this->form_validation->set_rules('id_perkiraan', 'id_perkiraan', 'required');
			$this->form_validation->set_rules('jumlah', 'jumlah', 'required');

			if($this->form_validation->run() == TRUE){

				$transaksi = array(
					'nasabah' => $this->input->post('nasabah', TRUE),
					'id_perkiraan' => $this->input->post('id_perkiraan', TRUE),
					'jumlah' => $this->input->post('jumlah', TRUE),
				);

				$this->conf->update('b_transaksi', $transaksi, array('id_transaksi' => $id_transaksi));

				redirect('transaksi');		
			}
		}

		$transaksi = $this->conf->get_where('b_transaksi', array('id_transaksi' => $id_transaksi));

		foreach ($transaksi->result() as $key) {
			$data['nasabah'] = $key->nasabah;
			$data['id_perkiraan'] = $key->id_perkiraan;
			$data['jumlah'] = $key->jumlah;
		}

		$data['perkiraan'] = $this->conf->get_all('b_perkiraan');
		$this->load->view('form_transaksi', $data);
	}

	public function delete(){
 		if(!is_numeric($this->uri->segment(3))){
 			redirect('transaksi');
 		}

 		$this->conf->delete(['b_transaksi'], ['id_transaksi' => $this->uri->segment(3)]);

 		redirect('transaksi');
 	}

}
