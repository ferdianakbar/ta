<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class presensi extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_admin'));
        $this->load->helper('presensi_helper');
    }   

public function presensi_manual(){
    $this->load->view('design/admin');
    $this->load->view('users/admin/presensi/presensi_manual');
    $this->load->view('design/footer');
    
}

public function manual() { 
    $data['manual']=$this->m_admin->manual();
    if($this->db->affected_rows() >0){
        $this->session->set_flashdata('msg', '<script>alert("Presensi ditambahkan")</script>');
        redirect('presensi/presensi_manual');
    }else{
        $this->session->set_flashdata('msg', '<script>alert("Gagal ditambahkan")</script>');
        redirect('cuti/lihat_cuti');
    }
    redirect('cuti/lihat_cuti');
    }

public function showPresman(){
    $data['presman']=$this->m_admin->show_presman();
    $this->load->view('design/admin');
    $this->load->view('users/admin/presensi/showPresman',$data);
    $this->load->view('design/footer');
}
public function approve(){
    $id = $this->uri->segment(3);
    $data['approve']=$this->m_admin->approve();
    if($this->db->affected_rows() >0){
        $this->session->set_flashdata('msg', '<script>alert("Berhasil Di Approve")</script>');
        redirect('presensi/showPresman');
    }else{
        $this->session->set_flashdata('msg', '<script>alert("Gagal Di Approve")</script>');
        redirect('cuti/lihat_cuti');
    }
    redirect('cuti/lihat_cuti');
}

public function data_presensi(){
    $data['presensi']=$this->m_admin->data_presensi();
    $this->load->view('design/admin');
    $this->load->view('users/admin/presensi/data_presensi',$data);
    $this->load->view('design/footer');
}  


}
