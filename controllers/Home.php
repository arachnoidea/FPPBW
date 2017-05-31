<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->helper('url');

	}

	function index(){
		redirect('home/lala');
	}

	public function admin(){
		$this->load->view("header");
		$this->load->view("index");
		$this->load->view("footer");
	}

	public function login()
	{
		$this->load->view("login");
	}

		
        function lala(){
        $this->load->view('cust/index');
        }

        function menu(){
        $hehe = $this->mymodel->GetBarang();
        $this->load->view('cust/menu', array('hehe' => $hehe));
        }

        function single(){
        $this->load->view('cust/single');
        }

        function contacts(){
        $this->load->view('cust/contact');
        }

        function events(){
        $hehe = $this->mymodel->GetBarang();	
        $this->load->view('cust/events', array('hehe' => $hehe));
        }

        function order(){
        $hehe = $this->mymodel->GetBarang();	
        $this->load->view('cust/order', array('hehe' => $hehe));
        }
}

