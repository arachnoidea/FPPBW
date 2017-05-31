<?php 

	class Login extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();		
			$this->load->model('m_login');
		}

		function index(){
			$this->load->view('login');
		}

		function do_login(){
			$username = $this->input->post('Username');
			$password = $this->input->post('Password');
			$where = array(
				'username' => $username,
				'password' => $password
				);
			$cek = $this->m_login->cek_login("admin",$where)->num_rows();
			if($cek > 0){
				$data_session = array(
					'nama' => $username,
					'status' => "login"
					);
	 
				$this->session->set_userdata($data_session);
				redirect(base_url('index.php/Home/admin'));
	 
			}else{
				echo "Username dan password salah !";
			}
		}

		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('index.php/Home/login'));
		}
	}
?> 