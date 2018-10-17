<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kegiatan extends CI_Controller{

    public function __construct()
    {
		parent::__construct();
		$this->load->model(array('m_admin','users_model'));
    } 
    public function getIns(){
        $data['instansi']=$this->m_admin->showInstansi();
        $this->load->view('design/admin');		
        $this->load->view('users/admin/kegiatan/getIns',$data);   
        $this->load->view('design/footer');
    }

    public function daftar_kegiatan(){
        $ins = $this->input->get('ins');
        $data['keg']=$this->m_admin->datkeg();
        $data['instansi']=$this->m_admin->data_unker($ins);
        $this->load->view('design/admin');		
        $this->load->view('users/admin/kegiatan/daftar_kegiatan',$data);   
        $this->load->view('design/footer');
    }

    public function detail_kegiatan(){
    $data['keg']=$this->m_admin->showKegiatan();
    $this->load->view('design/admin');
    $this->load->view('users/admin/kegiatan/detail_kegiatan',$data);
    $this->load->view('design/footer');    
    }
}