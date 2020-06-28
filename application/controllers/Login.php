<?php 

class Login extends CI_Controller{
	public function __construct(){
		parent ::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	public function aksi(){
		$this->form_validation->set_rules('username', 'username', 'required',array('required' => '*Username tidak boleh kosong.'));
		$this->form_validation->set_rules('password', 'password', 'required',array('required' => '*Password tidak boleh kosong.'));

		$email = $this->input->post('username');
		$password = $this->input->post('password');

		$data_login = $this->m_login->cek_akun($email, $password);

		if($this->form_validation->run() != false){

			if($data_login){
				$this->session->set_userdata('id', $data_login['id']);
				$this->session->set_userdata('nama', $data_login['nama']);
				$this->session->set_userdata('login', true);
				redirect('home');
			}else{
				$this->session->set_flashdata('pesan_flash', '*Akun tidak di temukan');
				$this->load->view('v_login');
			}
		}else{
			$this->load->view('v_login');
		}
	}


	public function logout(){
		$this->session->sess_destroy();
        redirect('login');
	}
}

?>
