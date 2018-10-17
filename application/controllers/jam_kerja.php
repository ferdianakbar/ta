<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class jam_kerja extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('m_admin'));
    }    

    public function daftar_jamkerja(){
        $data['instansi']=$this->m_admin->showInstansi();
        $this->load->view('design/admin');
        $this->load->view('users/admin/jam_kerja/daftar_jamkerja',$data);
        $this->load->view('design/footer');
    }

    public function detail_jamkerja(){
        $ins = $this->input->get('ins');
        if(isset($ins)) {
        $data['jamker']=$this->m_admin->showJamker($ins);
        }else {
        $data['pegawai']=$this->m_admin->lihat_pegawai();
        }
        $this->load->view('design/admin');
        $this->load->view('users/admin/jam_kerja/detail_jamkerja',$data);
        $this->load->view('design/footer');
    }
}