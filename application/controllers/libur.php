<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class libur extends CI_Controller{
public function __construct()
{
        parent::__construct();
        $this->load->model(array( 'm_admin'));
}   
public function tambah_libur() {  
	$data['libur']=$this->m_admin->lihat_libur();
    $this->load->view('design/admin');   
    $this->load->view('users/admin/libur/tambah_libur',$data);
    $this->load->view('design/footer');
    
}

public function lihat_libur(){
    $data['libur']=$this->m_admin->input_harilibur();
    $this->load->view('design/admin');
    $this->load->view('users/admin/libur/lihat_libur',$data);
    $this->load->view('design/footer');
}

public function data_libur(){
	$data['libur']=$this->m_admin->lihat_libur();
	$this->load->view('design/admin');
	$this->load->view('users/admin/libur/data_libur',$data);
	$this->load->view('design/footer');
}
public function hapus_libur($id)
	{
		//echo $id;
		//echo $this->url->segment(3);
		$this->m_admin->hapus_libur($id);
		if($this->db->affected_rows()>0)
			$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Dihapus")</script>');
		else
			$this->session->set_flashdata('msg', '<script>alert("Data Gagal Dihapus")</script>');
        redirect('libur/data_libur');
}
}
