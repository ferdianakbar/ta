<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class unit_kerja extends CI_Controller{

    public function __construct()
    {
		parent::__construct();
		$this->load->model(array('m_admin','users_model'));
    }   
    public function data_unitkerja(){
        $ins = $this->input->get('ins');
        if(isset($ins)) {
         $data['instansi']=$this->m_admin->data_unker($ins);
        }else {
        $data['pegawai']=$this->m_admin->lihat_pegawai();
        }
        $this->load->view('design/admin');
        $this->load->view('users/admin/unit_kerja/data_unitkerja',$data);
        $this->load->view('design/footer');
}
public function update_unitkerja(){
    $cek = $this->m_admin->update_unitkerja();
        
	if ($this->input->post()){
		if($this->db->affected_rows() >0){
		$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
		 redirect('admin/home');
		}else{
			$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
		redirect('pegawai/detail_egawai');
		}
        }
}
public function showIns(){
    $data['instansi']=$this->m_admin->showInstansi();
    $this->load->view('design/admin');		
    $this->load->view('users/admin/unit_kerja/showIns',$data);   
    $this->load->view('design/footer');
}

}