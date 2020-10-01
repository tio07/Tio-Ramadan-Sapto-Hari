<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkiraan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('conf');
	}

	public function index()
	{
		$data['data'] = $this->conf->get_all('b_perkiraan');

		$this->load->view('perkiraan', $data);
	}

	public function add()
	{
		if($this->input->post('submit', TRUE) == 'submit')
		{

			$this->form_validation->set_rules('nama_perkiraan', 'nama_perkiraan', 'required');
			$this->form_validation->set_rules('ket', 'ket', 'required');

			if ($this->form_validation->run() == TRUE)
			{
				$perkiraan = array(
					'nama_perkiraan' => $this->input->post('nama_perkiraan', TRUE),
					'ket' => $this->input->post('ket', TRUE),
				);

				$this->conf->insert('b_perkiraan', $perkiraan);

				redirect('perkiraan');
			}
		}

		$data['nama_perkiraan'] = $this->input->post('nama_perkiraan', TRUE);
		$data['ket'] = $this->input->post('ket', TRUE);

		$this->load->view('form_perkiraan', $data);
	}

	public function update()
	{
		$id_perkiraan = $this->uri->segment(3);

		if($this->input->post('submit', TRUE) == 'submit'){
			$this->form_validation->set_rules('nama_perkiraan', 'nama_perkiraan', 'required');
			$this->form_validation->set_rules('ket', 'ket', 'required');

			if($this->form_validation->run() == TRUE){

				$perkiraan = array(
					'nama_perkiraan' => $this->input->post('nama_perkiraan', TRUE),
					'ket' => $this->input->post('ket', TRUE),
				);

				$this->conf->update('b_perkiraan', $perkiraan, array('id_perkiraan' => $id_perkiraan));

				redirect('perkiraan');		
			}
		}

		$perkiraan = $this->conf->get_where('b_perkiraan', array('id_perkiraan' => $id_perkiraan));

		foreach ($perkiraan->result() as $key) {
			$data['nama_perkiraan'] = $key->nama_perkiraan;
			$data['ket'] = $key->ket;
		}

		$this->load->view('form_perkiraan', $data);
	}

	public function delete(){
 		if(!is_numeric($this->uri->segment(3))){
 			redirect('perkiraan');
 		}

 		$this->conf->delete(['b_perkiraan'], ['id_perkiraan' => $this->uri->segment(3)]);

 		redirect('perkiraan');
 	}

}
