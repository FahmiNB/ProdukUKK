<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function tampil_user(){
		$data['user'] = $this->m_data->tampil_data_user()->result();
		$this->load->view('v_tampil_user',$data);
	}

	function tampil_customer(){
		$data['customer'] = $this->m_data->tampil_data_customer()->result();
		$this->load->view('v_tampil_customer',$data);
	}
 
	function tambah(){
		$this->load->view('v_input_user');
	}
	function tambah_admin(){
		$this->load->view('v_input_admin');
	}
	function tambah_customer(){
		$this->load->view('v_input_customer');
	}
	function login(){
		$this->load->view('v_login');
	}
	function tampil_login(){
		$this->load->view('v_tampil_login');
	}

	function tambah_aksi_customer(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
 
		$data = array(
			'id' => $id,
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender,
			);
		$this->m_data->input_data($data,'customer');
		redirect('Welcome/index');
	}

	function tambah_aksi_customer_admin(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
 
		$data = array(
			'id' => $id,
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender,
			);
		$this->m_data->input_data($data,'customer');
		redirect('Welcome/tampil_customer');
	}

	function tambah_aksi_user(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
 
		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level,
			);
		$this->m_data->input_data($data,'user');
		redirect('Welcome/tampil_user');
	}

	function tambah_aksi_user_index(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
 
		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level,
			);
		$this->m_data->input_data($data,'user');
		redirect('Welcome/index');
	}
	function edit_user($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data_user($where,'user')->result();
		$this->load->view('v_edit_user',$data);
	}

	function edit_customer($id){
		$where = array('id' => $id);
		$data['customer'] = $this->m_data->edit_data_customer($where,'customer')->result();
		$this->load->view('v_edit_customer',$data);
	}

	function update_data_user(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$fullname = $this->input->post('fullname');
	$level = $this->input->post('level');
 
	$data = array(
		'username' => $username,
		'password' => $password,
		'fullname' => $fullname,
		'level' => $level
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data_user($where,$data,'user');
	redirect('Welcome/tampil_user');
	}

	function update_data_customer(){
	$id = $this->input->post('id');
	$name = $this->input->post('name');
	$address = $this->input->post('address');
	$phone = $this->input->post('phone');
	$gender = $this->input->post('gender');
 
	$data = array(
		'name' => $name,
		'address' => $address,
		'phone' => $phone,
		'gender' => $gender
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data_customer($where,$data,'customer');
	redirect('Welcome/tampil_customer');
	}

	function hapus_user($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data_user($where,'user');
		redirect('Welcome/tampil_user');
	}

	function hapus_customer($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data_customer($where,'customer');
		redirect('Welcome/tampil_customer');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_data->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('welcome/tampil_login');
 
		}else{
			echo "Username dan password salah !";
			echo anchor('welcome/login','back') ;
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('welcome/index');
	}

}