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
class pimpinan extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_perizinan');
		$this->load->model('m_kesehatan');
		$this->load->model('m_pelanggaran');
		$this->load->model('m_pimpinan');
		$this->load->model('m_admin');
		$this->load->model('m_daftar');
    }    
public function index() {     
$this->load->view('design/header3');   
        $this->load->view('Users/pimpinan/home_pimpinan');
        $this->load->view('design/footer');
    }
	public function simpan_pass(){
	if ($this->input->post()){
			$this->m_pimpinan->simpan_pass();	
		if($this->db->affected_rows() >0){
			$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
			redirect('pimpinan');
		}else{
			$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
		redirect('pimpinan/edit_pass');
		}
	}
	}
	public function edit_pass($id) {     
		$data['pimpinan']=$this->m_pimpinan->edit_pass($id);	
		$this->load->view('design/header3');
        $this->load->view('Users/pimpinan/ganti_pass',$data);
        $this->load->view('design/footer');
    }
	function cari_pergi(){
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');
		$data['pergi'] = $this->m_perizinan->perizinan_pergi_cari($bln, $thn);
		$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/perizinan/laporan_perizinan_pergi',$data);
        $this->load->view('design/footer');
	}
	function cari_pulang(){
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');
		$data['pulang'] = $this->m_perizinan->perizinan_pulang_cari($bln, $thn);
		$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/perizinan/laporan_perizinan_pulang',$data);
        $this->load->view('design/footer');
	}
public function laporan_perizinan_pergi() {   
		$data['pergi']=$this->m_perizinan->lihat_perizinan_pergi();
$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/perizinan/laporan_perizinan_pergi',$data);
        $this->load->view('design/footer');
    }
	public function laporan_perizinan_pulang() {   
		$data['pulang']=$this->m_perizinan->lihat_perizinan_pulang();
$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/perizinan/laporan_perizinan_pulang',$data);
        $this->load->view('design/footer');
    }
	function cari_kesehatan(){
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');
		$data['kesehatan'] = $this->m_kesehatan->kesehatan_cari($bln, $thn);
		$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/kesehatan/laporan_kesehatan',$data);
        $this->load->view('design/footer');
		}
public function laporan_kesehatan() {   
		$data['kesehatan']=$this->m_kesehatan->lihat_kesehatan();
$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/kesehatan/laporan_kesehatan',$data);
        $this->load->view('design/footer');
    }
	function cari_pelanggaran(){
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');
		$data['pelanggaran'] = $this->m_pelanggaran->pelanggaran_cari($bln, $thn);
		$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/pelanggaran/laporan_pelanggaran',$data);
        $this->load->view('design/footer');
	}
	public function laporan_pelanggaran() {   
		$data['pelanggaran']=$this->m_pelanggaran->lihat_pelanggaran();
$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/pelanggaran/laporan_pelanggaran',$data);
        $this->load->view('design/footer');
    }
		public function laporan_nilai_tes() {   
		$data['nilai']=$this->m_daftar->lihat_nilai_tes();
$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/psb/laporan_nilai_tes',$data);
        $this->load->view('design/footer');
    }
function cari_nilai(){
		
		$ket=$this->input->post('ket');
		$thn=$this->input->post('tahun');
		if($ket==''){
		$data['nilai'] = $this->m_daftar->nilai_tes_cari1($thn);
		$this->load->view('design/header3');
        $this->load->view('Users/pimpinan/psb/laporan_nilai_tes',$data);
        $this->load->view('design/footer');
		}else{
		$data['nilai'] = $this->m_daftar->nilai_tes_cari($thn,$ket);
		$this->load->view('design/header3');
        $this->load->view('Users/pimpinan/psb/laporan_nilai_tes',$data);
        $this->load->view('design/footer');
		}
	}
	public function detail_calon($id) {     
		$data['calon']=$this->m_daftar->lihat_formulir($id);
$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/psb/detail_calon',$data);   
		$this->load->view('design/footer');
    }
		function cari_calon(){
		
		$thn=$this->input->post('tahun');
		$data['calon'] = $this->m_daftar->calon_cari($thn);
	$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/psb/laporan_calon',$data); 
		$this->load->view('design/footer');
	}	
	public function laporan_calon() {     
		$data['calon']=$this->m_daftar->lihat_calon();
$this->load->view('design/header3');		
        $this->load->view('Users/pimpinan/psb/laporan_calon',$data); 
		$this->load->view('design/footer');
    }
	function g_calon()
    {
	
    $data['calon']= $this->m_daftar->g_calon();
	$this->load->view('design/header3');	
	$this->load->view('Users/pimpinan/psb/gcalon',$data);
	$this->load->view('design/footer');
    }	
	function g_nilai()
    {
	
    $data['nilai']= $this->m_daftar->g_nilai_tes();
	$this->load->view('design/header3');	
	$this->load->view('Users/pimpinan/psb/gnilai',$data);
	$this->load->view('design/footer');
    }
	
	function gt_pelanggaran()
    {
	
    $data['pelanggaran']= $this->m_pelanggaran->g_pelanggaran()->result();
	$this->load->view('design/header3');	
	$this->load->view('Users/pimpinan/pelanggaran/gtahun',$data);
	$this->load->view('design/footer');
    }	
	public function gb_pelanggaran($thn)
    {
		$data['pelanggaran']= $this->m_pelanggaran->g_pelanggaran()->result();
		$data['pelanggaran1']= $this->m_pelanggaran->g_pelanggaran1($thn)->result();
		$this->load->view('design/header3');	
		$this->load->view('Users/pimpinan/pelanggaran/gbulan',$data);
		$this->load->view('design/footer');
    }
	function gt_pulang()
    {
	
    $data['pulang']= $this->m_perizinan->g_izin_pulang()->result();
	$this->load->view('design/header3');	
	$this->load->view('Users/pimpinan/perizinan/gtahun_pulang',$data);
	$this->load->view('design/footer');
    }	
	public function gb_pulang($thn)
    {
		$data['pulang']= $this->m_perizinan->g_izin_pulang()->result();
	$data['pulang1']= $this->m_perizinan->g_izin_pulang1($thn)->result();
		$this->load->view('design/header3');	
		$this->load->view('Users/pimpinan/perizinan/gbulan_pulang',$data);
		$this->load->view('design/footer');
    }
		function gt_pergi()
    {
    $data['pergi']= $this->m_perizinan->g_izin_pergi()->result();
	$this->load->view('design/header3');	
	$this->load->view('Users/pimpinan/perizinan/gtahun_pergi',$data);
	$this->load->view('design/footer');
    }	
	public function gb_pergi($thn)
    {
		$data['pergi']= $this->m_perizinan->g_izin_pergi()->result();
		$data['pergi1']= $this->m_perizinan->g_izin_pergi1($thn)->result();
		$this->load->view('design/header3');	
		$this->load->view('Users/pimpinan/perizinan/gbulan_pergi',$data);
		$this->load->view('design/footer');
    }
		function gt_kesehatan()
    {
	
    $data['kesehatan']= $this->m_kesehatan->g_kesehatan()->result();
	$this->load->view('design/header3');	
	$this->load->view('Users/pimpinan/kesehatan/gtahun',$data);
	$this->load->view('design/footer');
    }	
	public function gb_kesehatan($thn)
    {
		$data['kesehatan']= $this->m_kesehatan->g_kesehatan()->result();
		$data['kesehatan1']= $this->m_kesehatan->g_kesehatan1($thn)->result();
		$this->load->view('design/header3');	
		$this->load->view('Users/pimpinan/kesehatan/gbulan',$data);
		$this->load->view('design/footer');
    }
	}