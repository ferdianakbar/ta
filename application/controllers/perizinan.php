<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */

/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class perizinan extends CI_Controller{
    //put your code here
    public function __construct()
    {
		parent::__construct();
		$this->load->model(array('m_perizinan','m_admin'));
		$this->load->helper(array('url','form'));
        $this->load->database();
    }  

public function tambah_perizinan(){
	
	// var_dump ($this->m_admin->pegawai($id)); exit;
		if ($id=$this->input->post('nip')){
		$data['pegawai']=$this->m_admin->pegawai($id);
		$data['instansi'] = $this->m_admin->showInstansi();
		$this->load->view('design/admin');
		$this->load->view('users/admin/perizinan/tambah_perizinan_pergi',$data);
		$this->load->view('design/footer');

	}else{
		$this->load->view('design/admin');
		$this->load->view('users/admin/perizinan/tambah_perizinan');
		$this->load->view('design/footer');
	}
	}
	
public function lihat_data_izin(){
	$data['izin']=$this->m_perizinan->input_perizinan();
	$data['izin']=$this->m_perizinan->lihat_izin();
	$this->load->view('design/admin');
	$this->load->view('users/admin/perizinan/lihat_data_izin',$data);
	$this->load->view('design/footer');
	}

public function data_izin(){
	$data['instansi'] = $this->m_admin->showInstansi();
	$data['izin']=$this->m_perizinan->lihat_izin();
	$this->load->view('design/admin');
	$this->load->view('users/admin/perizinan/data_izin',$data);
	$this->load->view('design/footer');
}	

public function aproval(){
	$data['izin']=$this->m_perizinan->lihat_izin();
	$this->load->view('design/admin');
	$this->load->view('users/admin/perizinan/aproval',$data);
	$this->load->view('design/footer');
}	

public function delete_izin(){
	$id = $this->uri->segment(3);
	$data['izin']=$this->m_perizinan->delete($id);
	if($this->db->affected_rows() >0){
		$this->session->set_flashdata('msg', '<script>alert("Data telah dihapus")</script>');
		redirect('perizinan/aproval');
	}else{
		$this->session->set_flashdata('msg', '<script>alert("Gagal Di Approve")</script>');
		redirect('perizinan/data_izin');
	}
	redirect('perizinan/data_izin');	
}

public function update_izin(){
	$id = $this->uri->segment(3);
	$this->m_perizinan->update_izin($id);
            if($this->db->affected_rows() >0){
                $this->session->set_flashdata('msg', '<script>alert("Berhasil Di Approve")</script>');
                redirect('perizinan/data_izin');
            }else{
                $this->session->set_flashdata('msg', '<script>alert("Gagal Di Approve")</script>');
                redirect('perizinan/data_izin');
            }
            redirect('perizinan/data_izin');
}
public function tolak_izin(){
	$id = $this->uri->segment(3);
	$this->m_perizinan->tolak_izin($id);
            if($this->db->affected_rows() >0){
                $this->session->set_flashdata('msg', '<script>alert("Berhasil Di Tolak")</script>');
                redirect('perizinan/data_izin');
            }else{
                $this->session->set_flashdata('msg', '<script>alert("Gagal Di Tolak")</script>');
                redirect('perizinan/data_izin');
            }
            redirect('perizinan/data_izin');
}

	public function tambah_perizinan_pergi() {    
		$data['pegawai']=$this->m_admin->edit_pegawai($id);
		$data['instansi'] = $this->m_admin->showInstansi();
		$this->load->view('design/admin');    
        $this->load->view('Users/admin/perizinan/tambah_perizinan_pergi',$data);
        $this->load->view('design/footer');
    }
	
}