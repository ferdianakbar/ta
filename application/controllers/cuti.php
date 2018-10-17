<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class cuti extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('m_admin'));
    }  

    public function nip_cuti(){
    $data['cuti'] = $this->m_admin->showJenisCuti();
	if ($id=$this->input->post('nip')){
        $data['pegawai']=$this->m_admin->pegawai($id);
		$this->load->view('design/admin');
		$this->load->view('users/admin/cuti/tambah_cuti',$data);
		$this->load->view('design/footer');

	}else{
		$this->load->view('design/admin');
		$this->load->view('users/admin/cuti/nip_cuti');
		$this->load->view('design/footer');
        }
    }
    public function tambah_cuti() {  
        $this->m_admin->input_cuti();
        redirect("cuti/lihat_cuti");
    }

    public function lihat_cuti(){
        $data['cuti']=$this->m_admin->lihat_cuti();
        // var_dump ($data['cuti']=$this->m_admin->lihat_cuti()); exit;
        $this->load->view('design/admin');
        $this->load->view('users/admin/cuti/lihat_cuti',$data);
        $this->load->view('design/footer');
        }
    
    public function approval_cuti(){
        $data['cuti']=$this->m_admin->lihat_cuti();
        $this->load->view('design/admin');
        $this->load->view('users/admin/cuti/approval_cuti',$data);
        $this->load->view('design/footer');
        }

    public function update_cuti(){  
    $id = $this->uri->segment(3);
    $this->m_admin->approval_cuti($id);
            if($this->db->affected_rows() >0){
                $this->session->set_flashdata('msg', '<script>alert("Berhasil Di Approve")</script>');
                redirect('cuti/lihat_cuti');
            }else{
                $this->session->set_flashdata('msg', '<script>alert("Gagal Di Approve")</script>');
                redirect('cuti/lihat_cuti');
            }
            redirect('cuti/lihat_cuti');
            }

    public function tolak_cuti(){
	$id = $this->uri->segment(3);
	$this->m_admin->tolak_cuti($id);
            if($this->db->affected_rows() >0){
                $this->session->set_flashdata('msg', '<script>alert("Berhasil Di Tolak")</script>');
                redirect('cuti/approval_cuti');
            }else{
                $this->session->set_flashdata('msg', '<script>alert("Gagal Di Tolak")</script>');
                redirect('perizinan/data_izin');
            }
            redirect('cuti/aproval_cuti');
}
}   
