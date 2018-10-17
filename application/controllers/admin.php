<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class admin extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('m_admin','users_model'));
		$this->load->helper('presensi_helper');
    }    
public function index() {     
        $this->load->view('design/admin');   
        $this->load->view('users/admin/home_admin');
        $this->load->view('design/footer');
	}
//pegawai
public function lihat_data_pegawai(){
	$data['instansi'] = $this->m_admin->showInstansi();
	$this->load->view('design/admin');
	$this->load->view('users/admin/pegawai/lihat_data_pegawai', $data);
	$this->load->view('design/footer');
}
public function edit_data_pegawai(){
	$data['users']=$this->m_admin->lihat_pegawai();
	$this->load->view('design/admin');
	$this->load->view('users/admin/pegawai/edit_data_pegawai',$data);
	$this->load->view('design/footer');
}

public function edit_pegawai($id){
	$data['pegawai']=$this->m_admin->pegawai($id);
	$this->load->view('design/admin');
	$this->load->view('Users/admin/pegawai/detail_pegawai',$data);
	$this->load->view('design/footer');
}
public function data_pegawai(){
	$ins = $this->input->get('ins');
	if(isset($ins)) {
	 $data['pegawai']=$this->m_admin->edit_pegawai($ins);
	}else {
	$data['pegawai']=$this->m_admin->lihat_pegawai();
	}
	$this->load->view('design/admin');
	$this->load->view('users/admin/pegawai/data_pegawai',$data);
	$this->load->view('design/footer');
}
public function detail_pegawai($id) {
	$data['pegawai']=$this->m_admin->pegawai($id);
	$data['jabatan'] = $this->m_admin->jabatan();
	$data['instansi'] = $this->m_admin->showInstansi();
	$this->load->view('design/admin');		
	$this->load->view('users/admin/pegawai/detail_pegawai',$data);   
$this->load->view('design/footer');
}

public function update_pegawai(){
	$cek = $this->m_admin->update_pegawai();
	
if ($this->input->post()){
	if($this->db->affected_rows() >0){
	$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
	 redirect('admin/edit_data_pegawai');
	}else{
		$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
	redirect('admin');
	}
	}
}
public function tambah_pegawai(){
	$this->m_admin->input_pegawai();
	$data['jabatan'] = $this->m_admin->jabatan();
	$data['instansi'] = $this->m_admin->showInstansi();
	$data['pegawai']=$this->m_admin->lihat_pegawai();
	$this->load->view('design/admin');
	$this->load->view('users/admin/pegawai/tambah_pegawai',$data);
	$this->load->view('design/footer');
	}

public function hapus_pegawai($id)
{
	//echo $id;
	//echo $this->url->segment(3);
	$this->m_admin->hapus_pegawai($id);
	if($this->db->affected_rows()>0)
		$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Dihapus")</script>');
	else
		$this->session->set_flashdata('msg', '<script>alert("Data Gagal Dihapus")</script>');
	redirect('admin/data_pegawai');
}
	
public function tambah_users() {
		$data['instansi'] = $this->m_admin->showInstansi();
		$data['akses'] = $this->users_model->showAkses();
		$data['users'] = $this->users_model->user();
        $this->load->view('design/admin');    
        $this->load->view('Users/admin/users/tambah_users',$data);
        $this->load->view('design/footer');
	}
	
public function lihat_users() {  
		$data['users']=$this->users_model->input_users();
		$data['users']=$this->users_model->user();
        $this->load->view('design/admin');		
        $this->load->view('Users/admin/users/lihat_users',$data);
        $this->load->view('design/footer');
	}

	public function update_users(){
		$data['users']=$this->users_model->update_users();
		if($this->db->affected_rows() >0){
			$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
			redirect('admin/data_users');
		}else{
			$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
		redirect('user/ganti_pass');
		}
	}
	public function simpan_pass(){
				$this->m_admin->simpan_pass();	
			if($this->db->affected_rows() >0){
				$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
				redirect('admin/data_users');
			}else{
				$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
			redirect('user/ganti_pass');
			}
	}	
	public function ganti_pass() {     
		$data['user']=$this->users_model->user();
		$data['pass']=$this->m_admin->edit_pass();		
		$this->load->view('design/admin');
        $this->load->view('Users/admin/users/ganti_pass',$data);
        $this->load->view('design/footer');
    }
	
public function data_users() { 
		$data['users']=$this->users_model->user();
        $this->load->view('design/admin');		
        $this->load->view('Users/admin/users/data_users',$data);
        $this->load->view('design/footer');
    }
	
public function lihat_daftar_jam_kerja() {   
	$data['users']=$this->m_admin->lihat_users();
        $this->load->view('design/admin');		
        $this->load->view('Users/admin/users/lihat_daftar_jam_kerja',$data);
        $this->load->view('design/footer');
    }
public function simpan_users(){
	if ($this->input->post()){
			$this->m_admin->simpan_users();	
		if($this->db->affected_rows() >0){
			$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
			redirect('admin/lihat_users');
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
		redirect('admin/lihat_users');
		}
	}
	}
		public function edit_users($id){
		$data['instansi'] = $this->m_admin->showInstansi();
		$data['users']=$this->users_model->edit_user($id);
		$data['akses']=$this->users_model->showAkses();
		$this->load->view('design/admin');
		$this->load->view('Users/admin/users/edit_users',$data);
		$this->load->view('design/footer');
	}
	public function hapus_users($id)
	{
		//echo $id;
		//echo $this->url->segment(3);
		$this->m_admin->hapus_users($id);
		if($this->db->affected_rows()>0)
			$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Dihapus")</script>');
		else
			$this->session->set_flashdata('msg', '<script>alert("Data Gagal Dihapus")</script>');
		redirect('admin/data_users');
	}	    
public function tambah_izin_pergi() {    
	$this->load->view('design/admin');    
	$this->load->view('Users/admin/perizinan/tambah_izin_pergi',$data);
	$this->load->view('design/footer');
}
}
