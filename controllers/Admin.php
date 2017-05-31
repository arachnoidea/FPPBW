<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

 	public function form(){
 		$this->load->view("header");
		$this->load->view("form");
		$this->load->view("footer");
	}

	public function bt(){
		$this->load->view("header");
		$data =$this->mymodel->GetBarang();
		$this->load->view('basic_tabel', array('data' => $data));
		$this->load->view("footer");
	}

	public function testi(){
		$this->load->view("header");
		$data =$this->mymodel->GetTesti();
		$this->load->view('testi_tabel', array('data' => $data));
		$this->load->view("footer");
	}

	public function tambahdata(){
		$this->load->view('form');
	}

	public function do_insert(){
		$upload=substr($this->do_upload(),1);
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];
		
		
		$data_insert = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
			'upload' => $upload,
			);
			$res = $this->db->insert('barang',$data_insert);
			if($res>=1){
				redirect('Admin/form');
			}else{
				echo "<h2>Silahkan diulangi lagi. </h2>";
			}
	}

	public function do_upload(){
	$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "./upload/".uniqid(rand()).".".$type;
		if(in_array($type, array("jpg","jpeg","gif","png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if (move_uploaded_file($_FILES["pic"]["tmp_name"],$url));
					return $url;
		return "";
	}

	public function edit_data($kode_barang){
		$u = $this->mymodel->GetBarang("where kode_barang = '$kode_barang'");
		$data = array(
			"kode_barang" => $u[0]['kode_barang'],
			"nama_barang" => $u[0]['nama_barang'],
			"harga" => $u[0]['harga'],
			"deskripsi" => $u[0]['deskripsi'],

			);
		$this->load->view('header');
		$this->load->view('form_edit',$data);
		$this->load->view('footer');
	}

	public function do_update(){
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];
		$data_update = array(
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
			);
			$where = array('kode_barang' => $kode_barang);
			$res = $this->mymodel->UpdateData('barang',$data_update,$where);
			if($res>=1){
				redirect('Admin/bt');
			}else{
				echo "<h2>update gagal</h2>";
			}
	}

	public function do_delete($kode_barang){
		$where = array('kode_barang' => $kode_barang);
		$res = $this->mymodel->DeleteData('barang',$where);
		if ($res>=1){
			redirect('Admin/bt');
		}
	}

	function email(){
		$this->load->library('email'); 

		$config['proxy_ips'] = '';
		$config ['protocol' ]= 'smtp'; 
		$config ['smtp_host'] = 'ssl://smtp.gmail.com'; 
		$config ['smtp_port'] = '465'; 
		$config ['smtp_timeout'] = '30';
		$config ['smtp_user'] = 'deaayu1247@gmail.com';
		$config ['smtp_pass'] = 'deaayu1213';
		$config ['mailtype'] = 'html';
		$config ['charset'] = 'utf-8'; 
		$config ['newline'] = "\r\n";  
		$config ['wordwrap'] = TRUE ;
		$config ['validation'] = TRUE;
		$this->email->initialize($config);
		// ------------------------------------------------ // 

		$this->email->to('ochadea12@gmail.com');
		$this->email->from('deaayu1247.com@gmail.com', $this->input->post('nama'));
		$this->email->subject("Order Oleh Oleh Khas Kediri".'-'.$this->input->post('nama'));
		$this->email->message($this->input->post('nama').'<br>'.$this->input->post('email').'<br>'.$this->input->post('hp').'<br>'.$this->input->post('pesan').'<br>'.$this->input->post('quantity').'<br>'.$this->input->post('deliv').'<br>'.$this->input->post('payment').'<br>'.$this->input->post('message'));
		$this->email->send(); 

		redirect('home/order');
    }
}