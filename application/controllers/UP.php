<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UP extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('m_admin','m_UP','users_model','m_perizinan','m_admin'));
		$this->load->helper(array('url','form'));
		$this->load->helper('presensi_helper');
        $this->load->database();
		
    }    
public function index() {     
$this->load->view('design/UP');   
        $this->load->view('Users/pimpinan/home_pimpinan');
        $this->load->view('design/footer');
    }
//pegawai
public function edit_data_pegawai(){
	$ins = $this->session->userdata('id_ins');
	$data['pegawai']=$this->m_admin->edit_pegawai($ins);
	$this->load->view('design/UP');
	$this->load->view('users/UP/pegawai/edit_data_pegawai',$data);
	$this->load->view('design/footer');
}

public function edit_pegawai($id){
	$data['pegawai']=$this->m_admin->pegawai($id);
	$this->load->view('design/admin');
	$this->load->view('Users/admin/pegawai/detail_pegawai',$data);
	$this->load->view('design/footer');
}
public function data_pegawai(){
	$ins = $this->session->userdata('id_ins');
	if(isset($ins)) {
	 $data['pegawai']=$this->m_admin->edit_pegawai($ins);
	}else {
	$data['pegawai']=$this->m_admin->lihat_pegawai();
	}
	$this->load->view('design/UP');
	$this->load->view('users/UP/pegawai/data_pegawai',$data);
	$this->load->view('design/footer');
}
public function detail_pegawai($id) {
	$data['pegawai']=$this->m_admin->pegawai($id);
	$data['jabatan'] = $this->m_admin->jabatan();
	$data['instansi'] = $this->m_admin->showInstansi();
	$this->load->view('design/UP');		
	$this->load->view('users/UP/pegawai/detail_pegawai',$data);   
$this->load->view('design/footer');
}

public function update_pegawai(){
	$cek = $this->m_admin->update_pegawai();
	
if ($this->input->post()){
	if($this->db->affected_rows() >0){
	$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
	 redirect('UP/edit_data_pegawai');
	}else{
		$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
	redirect('UP');
	}
	}
}
public function tambah_pegawai(){
	$ins=$this->session->userdata('id_ins');
	$this->m_admin->input_pegawai();
	$data['jabatan'] = $this->m_admin->jabatan();
	$data['instansi'] = $this->m_UP->showIns($ins);
	$data['pegawai']=$this->m_admin->lihat_pegawai();
	$this->load->view('design/UP');
	$this->load->view('users/UP/pegawai/tambah_pegawai',$data);
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
	redirect('UP/pegawai/data_pegawai');
}

// UNIT KERJA
public function data_unitkerja(){
	$ins=$this->session->userdata('id_ins');
	if(isset($ins)) {
	 $data['instansi']=$this->m_admin->data_unker($ins);
	}else {
	$data['pegawai']=$this->m_admin->lihat_pegawai();
	}
	$this->load->view('design/UP');
	$this->load->view('users/UP/unit_kerja/data_unitkerja',$data);
	$this->load->view('design/footer');
}
public function update_unitkerja(){
$cek = $this->m_admin->update_unitkerja();
	
if ($this->input->post()){
	if($this->db->affected_rows() >0){
	$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
	 redirect('UP/data_unitkerja');
	}else{
		$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
	redirect('UP/data_unitkerja');
	}
	}
}
// KEGIATAN
public function getIns(){
	$ins=$this->session->userdata('id_ins');
	$data['instansi'] = $this->m_UP->showIns($ins);
	$this->load->view('design/UP');		
	$this->load->view('users/UP/kegiatan/getIns',$data);   
	$this->load->view('design/footer');
}
public function daftar_kegiatan(){
	$ins = $this->input->get('ins');
    $data['keg']=$this->m_admin->datkeg();
    $data['instansi']=$this->m_admin->data_unker($ins);
	$this->load->view('design/UP');		
	$this->load->view('users/UP/kegiatan/daftar_kegiatan',$data);   
	$this->load->view('design/footer');
}

public function detail_kegiatan(){
$data['keg']=$this->m_admin->showKegiatan();
$this->load->view('design/admin');
$this->load->view('users/admin/kegiatan/detail_kegiatan',$data);
$this->load->view('design/footer');    
}	
	
public function tambah_users() {
		$ins=$this->session->userdata('id_ins');
		$data['instansi'] = $this->m_UP->showIns($ins);
		$data['akses'] = $this->users_model->showAkses();
		$data['users'] = $this->users_model->user();
        $this->load->view('design/UP');    
        $this->load->view('Users/UP/users/tambah_users',$data);
        $this->load->view('design/footer');
	}
	
public function lihat_users() {  
		$data['users']=$this->users_model->input_users();
		$data['users']=$this->users_model->user();
        $this->load->view('design/UP');		
        $this->load->view('Users/UP/users/lihat_users',$data);
        $this->load->view('design/footer');
	}

public function update_users(){
	$data['users']=$this->m_admin->update_users($photo);
	if($this->db->affected_rows() >0){
		$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Diupdate")</script>');
		redirect('UP/lihat_users');
	}else{
		$this->session->set_flashdata('msg', '<script>alert("Data Gagal Diupdate")</script>');
	redirect('UP/lihat_users');
	}
}
	public function simpan_pass(){
				$this->m_admin->simpan_pass();	
			if($this->db->affected_rows() >0){
				$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
				redirect('UP/data_users');
			}else{
				$this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
			redirect('UP/ganti_pass');
			}
	}	
	public function ganti_pass() {     
		$data['user']=$this->users_model->user();
		$data['pass']=$this->m_admin->edit_pass();		
		$this->load->view('design/UP');
        $this->load->view('Users/UP/users/ganti_pass',$data);
        $this->load->view('design/footer');
    }
	
public function data_users() { 
		$data['users']=$this->users_model->user();
        $this->load->view('design/UP');		
        $this->load->view('Users/UP/users/data_users',$data);
        $this->load->view('design/footer');
    }
	
public function lihat_daftar_jam_kerja() {   
	$data['users']=$this->m_admin->lihat_users();
        $this->load->view('design/UP');		
        $this->load->view('Users/UP/users/lihat_daftar_jam_kerja',$data);
        $this->load->view('design/footer');
    }
public function simpan_users(){
	if ($this->input->post()){
			$this->m_admin->simpan_users();	
		if($this->db->affected_rows() >0){
			$this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
			redirect('UP/lihat_users');
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
		redirect('UP/lihat_users');
		}
	}
	}
		public function edit_users($id){
		$data['instansi'] = $this->m_admin->showInstansi();
		$data['users']=$this->users_model->edit_user($id);
		$data['akses']=$this->users_model->showAkses();
		$this->load->view('design/UP');
		$this->load->view('Users/UP/users/edit_users',$data);
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
		redirect('UP/data_users');
	}	    
// DATA IZIN

public function tambah_perizinan(){
	
	// var_dump ($this->m_admin->pegawai($id)); exit;
		if ($id=$this->input->post('nip')){
		$data['pegawai']=$this->m_admin->pegawai($id);
		$ins=$this->session->userdata('id_ins');
		$data['instansi'] = $this->m_UP->showIns($ins);
		$this->load->view('design/UP');
		$this->load->view('users/UP/perizinan/tambah_perizinan_pergi',$data);
		$this->load->view('design/footer');

	}else{
		$this->load->view('design/UP');
		$this->load->view('users/UP/perizinan/tambah_perizinan');
		$this->load->view('design/footer');
	}
	}
	
public function lihat_data_izin(){
	$data['izin']=$this->m_perizinan->input_perizinan();
	$data['izin']=$this->m_perizinan->lihat_izin();
	$this->load->view('design/UP');
	$this->load->view('users/UP/perizinan/lihat_data_izin',$data);
	$this->load->view('design/footer');
	}

public function data_izin(){
	$data['instansi'] = $this->m_admin->showInstansi();
	$data['izin']=$this->m_perizinan->lihat_izin();
	$this->load->view('design/UP');
	$this->load->view('users/UP/perizinan/data_izin',$data);
	$this->load->view('design/footer');
}	

public function aproval(){
	$data['instansi'] = $this->m_admin->showInstansi();
	$data['izin']=$this->m_perizinan->lihat_izin();
	$this->load->view('design/UP');
	$this->load->view('users/UP/perizinan/aproval',$data);
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
	public function tambah_libur() {  
		$data['libur']=$this->m_admin->lihat_libur();
		$this->load->view('design/UP');   
		$this->load->view('users/UP/libur/tambah_libur',$data);
		$this->load->view('design/footer');
		
	}
	
	public function lihat_libur(){
		$data['libur']=$this->m_admin->input_harilibur();
		$this->load->view('design/UP');
		$this->load->view('users/UP/libur/lihat_libur',$data);
		$this->load->view('design/footer');
	}
	
	public function data_libur(){
		$data['libur']=$this->m_admin->lihat_libur();
		$this->load->view('design/UP');
		$this->load->view('users/UP/libur/data_libur',$data);
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
			redirect('UP/data_libur');
	}
	public function daftar_jamkerja(){
        $ins=$this->session->userdata('id_ins');
		$data['instansi'] = $this->m_UP->showIns($ins);
        $this->load->view('design/UP');
        $this->load->view('users/UP/jam_kerja/daftar_jamkerja',$data);
        $this->load->view('design/footer');
    }

    public function detail_jamkerja(){
        $ins = $this->input->get('ins');
        if(isset($ins)) {
        $data['jamker']=$this->m_admin->showJamker($ins);
        }else {
        $data['pegawai']=$this->m_admin->lihat_pegawai();
        }
        $this->load->view('design/UP');
        $this->load->view('users/UP/jam_kerja/detail_jamkerja',$data);
        $this->load->view('design/footer');
	}
	
	public function nip_cuti(){
		$data['cuti'] = $this->m_admin->showJenisCuti();
		if ($id=$this->input->post('nip')){
			$data['pegawai']=$this->m_admin->pegawai($id);
			$this->load->view('design/UP');
			$this->load->view('users/UP/cuti/tambah_cuti',$data);
			$this->load->view('design/footer');
	
		}else{
			$this->load->view('design/UP');
			$this->load->view('users/UP/cuti/nip_cuti');
			$this->load->view('design/footer');
			}
		}
		public function tambah_cuti() {  
			$this->m_admin->input_cuti();
			redirect("UP/lihat_cuti");
		}
	
		public function lihat_cuti(){
			$data['cuti']=$this->m_admin->lihat_cuti();
			// var_dump ($data['cuti']=$this->m_admin->lihat_cuti()); exit;
			$this->load->view('design/UP');
			$this->load->view('users/UP/cuti/lihat_cuti',$data);
			$this->load->view('design/footer');
			}
		
		public function approval_cuti(){
			$data['cuti']=$this->m_admin->lihat_cuti();
			$this->load->view('design/UP');
			$this->load->view('users/UP/cuti/approval_cuti',$data);
			$this->load->view('design/footer');
			}
	
		public function update_cuti(){  
		$id = $this->uri->segment(3);
		$this->m_admin->approval_cuti($id);
				if($this->db->affected_rows() >0){
					$this->session->set_flashdata('msg', '<script>alert("Berhasil Di Approve")</script>');
					redirect('UP/lihat_cuti');
				}else{
					$this->session->set_flashdata('msg', '<script>alert("Gagal Di Approve")</script>');
					redirect('UP/lihat_cuti');
				}
				redirect('UP/lihat_cuti');
				}
	
		public function tolak_cuti(){
		$id = $this->uri->segment(3);
		$this->m_admin->tolak_cuti($id);
				if($this->db->affected_rows() >0){
					$this->session->set_flashdata('msg', '<script>alert("Berhasil Di Tolak")</script>');
					redirect('UP/approval_cuti');
				}else{
					$this->session->set_flashdata('msg', '<script>alert("Gagal Di Tolak")</script>');
					redirect('perizinan/data_izin');
				}
				redirect('UP/aproval_cuti');
	}

	public function presensi_manual(){
		$this->load->view('design/UP');
		$this->load->view('users/UP/presensi/presensi_manual');
		$this->load->view('design/footer');
		
	}
	
	public function manual() { 
		//admin
		$data['manual']=$this->m_admin->manual();
		if($this->db->affected_rows() >0){
			$this->session->set_flashdata('msg', '<script>alert("Presensi ditambahkan")</script>');
			redirect('UP/presensi_manual');
		}else{
			$this->session->set_flashdata('msg', '<script>alert("Gagal ditambahkan")</script>');
			redirect('UP/lihat_cuti');
		}
		redirect('UP/lihat_cuti');
		}
	
	public function showPresman(){
		$data['presman']=$this->m_admin->show_presman();
		$this->load->view('design/UP');
		$this->load->view('users/UP/presensi/showPresman',$data);
		$this->load->view('design/footer');
	}
	public function approve(){
		$id = $this->uri->segment(3);
		$data['approve']=$this->m_admin->approve();
		if($this->db->affected_rows() >0){
			$this->session->set_flashdata('msg', '<script>alert("Berhasil Di Approve")</script>');
			redirect('UP/showPresman');
		}else{
			$this->session->set_flashdata('msg', '<script>alert("Gagal Di Approve")</script>');
			redirect('UP/lihat_cuti');
		}
		redirect('UP/lihat_cuti');
		}
	
	public function data_presensi(){
		$data['presensi']=$this->m_admin->data_presensi();
		$this->load->view('design/UP');
		$this->load->view('users/UP/presensi/data_presensi',$data);
		$this->load->view('design/footer');
	}
	public function kuisioner(){  
        $data['pkp']=$this->m_admin->input_nilai();
        $data['pkp']=$this->m_admin->pkp();
        $this->load->view('design/UP');		
        $this->load->view('Users/UP/penilaian_kinerja/kuisioner',$data);
        $this->load->view('design/footer');
    }

    public function simpanAtasan() {
        $kepem1 = $this->input->post('kepem1');
        $kepem2 = $this->input->post('kepem2');
        $kepem3 = $this->input->post('kepem3');
        $kepem4 = $this->input->post('kepem4');
        $kepem5 = $this->input->post('kepem5');
        $kepem6 = $this->input->post('kepem6');
        $kepem7 = $this->input->post('kepem7');
        $kepemData = array($kepem1, $kepem2, $kepem3, $kepem4, $kepem5, $kepem6, $kepem7);
        $sumKepem = array_sum($kepemData);

        $ketram1 = $this->input->post('ketram1');
        $ketram2 = $this->input->post('ketram2');
        $ketram3 = $this->input->post('ketram3');
        $ketram4 = $this->input->post('ketram4');
        $ketram5 = $this->input->post('ketram5');
        $ketram6 = $this->input->post('ketram6');
        $ketram7 = $this->input->post('ketram7');
        $ketramData = array($ketram1, $ketram2, $ketram3, $ketram4, $ketram5, $ketram6, $ketram7);
        $sumKetram = array_sum($ketramData);

        $praka1 = $this->input->post('praka1');
        $praka2 = $this->input->post('praka2');
        $prakaData = array($praka1, $praka2);
        $sumPraka = array_sum($prakaData);

        $kerja1 = $this->input->post('kerja1');
        $kerja2 = $this->input->post('kerja2');
        $kerja3 = $this->input->post('kerja3');
        $kerja4 = $this->input->post('kerja4');
        $kerja5 = $this->input->post('kerja5');
        $kerjaData = array($kerja1, $kerja2, $kerja3, $kerja4, $kerja5);
        $sumKerja = array_sum($kerjaData);
        
        $keta1 = $this->input->post('keta1');
        $keta2 = $this->input->post('keta2');
        $keta3 = $this->input->post('keta3');
        $keta4 = $this->input->post('keta4');
        $keta5 = $this->input->post('keta5');
        $keta6 = $this->input->post('keta6');
        $keta7 = $this->input->post('keta7');
        $kerjaData = array($keta1, $keta2, $keta3, $keta4, $keta5, $keta6, $keta7);
        $sumKeta = array_sum($kerjaData);
        $total = array($sumKepem, $sumKetram, $sumPraka, $sumKerja, $sumKeta);
        $total = array_sum($total);
        $nipe = $this->session->userdata('nip');

        $this->m_admin->inputAtasan($nipe, $sumKepem, $sumKetram, $sumPraka, $sumKerja, $sumKeta, $total);
    }

    public function simpanTeman() {
        $kerja1 = $this->input->post('kerja1');
        $kerja2 = $this->input->post('kerja2');
        $kerja3 = $this->input->post('kerja3');
        $kerja4 = $this->input->post('kerja4');
        $kerja5 = $this->input->post('kerja5');
        $kerjaData = array($kerja1, $kerja2, $kerja3, $kerja4, $kerja5);
        $sumKerja = array_sum($kerjaData);
        
        $keta1 = $this->input->post('keta1');
        $keta2 = $this->input->post('keta2');
        $keta3 = $this->input->post('keta3');
        $keta4 = $this->input->post('keta4');
        $keta5 = $this->input->post('keta5');
        $keta6 = $this->input->post('keta6');
        $keta7 = $this->input->post('keta7');
        $kerjaData = array($keta1, $keta2, $keta3, $keta4, $keta5, $keta6, $keta7);
        $sumKeta = array_sum($kerjaData);
        $total = array($sumKerja, $sumKeta);
        $total = array_sum($total);
        $nipe = $this->session->userdata('nip');

        $this->m_admin->inputTeman($nipe, $sumKerja, $sumKeta, $total);
    }

    public function simpan(){
        if($this->input->post('tingkatan') == 'Atasan' || $this->input->post('tingkatan') == 'Bawahan') {
            $this->simpanAtasan();
        }
        else {
            $this->simpanTeman();
        }
        redirect('UP/showNip');
    }

    public function hasil(){
        $data['nilai'] = $this->m_admin->dataPenilaian();
        $this->load->view('design/UP');		
        $this->load->view('Users/UP/penilaian_kinerja/Hasil', $data);
        $this->load->view('design/footer');
    }
    public function showNip(){
        if ($id=$this->input->post('nip')){
            $nip = array(
				'nip'=> $this->input->post('nip'),
				'tingkatan'=> $this->input->post('tingkatan')
			);
            $data['pkp']=$this->m_admin->pkp();
            $data['pegawai']=$this->m_admin->pegawai($id);
            $this->load->view('design/UP');
            $this->load->view('users/UP/penilaian_kinerja/kuisioner',$data);
            $this->load->view('design/footer');
    
        }else{

            $this->load->view('design/UP');
            $this->load->view('users/UP/penilaian_kinerja/showNip');
            $this->load->view('design/footer');
        }
        }
}
