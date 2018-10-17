<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class pegawai extends CI_Controller{
public function __construct()
{
        parent::__construct();
        $this->load->model(array('m_admin','m_pegawai','users_model','m_perizinan','m_UP'));
        $this->load->helper('presensi_helper');
}       
public function index() {     
        $this->load->view('design/pegawai');   
        $this->load->view('Users/pimpinan/home_pimpinan');
        $this->load->view('design/footer');
    }

public function detail_pegawai(){
        $id =  $this->session->userdata('nip');
        $data['pegawai'] = $this->m_pegawai->showPegawai($id);    
    // var_dump($data['pegawai'] = $this->m_pegawai->showPegawai($id));exit;
        $data['jabatan'] = $this->m_admin->jabatan();
        $data['instansi'] = $this->m_admin->showInstansi();  
        $this->load->view('design/pegawai');		
        $this->load->view('users/pegawai/detail_pegawai',$data);   
	      $this->load->view('design/footer');
}

public function update_pegawai(){
    $photo = $this->uploadPhoto('photo', 'foto_profil');
    // var_dump($photo); exit;
    $this->m_admin->update_users($photo);
if ($this->input->post()){
    if($this->db->affected_rows() >0){
    $this->session->set_flashdata('msg', '<script>alert("Data Berhasil Disimpan")</script>');
            redirect('pegawai/detail_pegawai');
            }else{
        $this->session->set_flashdata('msg', '<script>alert("Data Gagal Disimpan")</script>');
    redirect('pegawai');
    }
    }
}
public function tambah_pegawai(){
        $this->m_admin->input_pegawai();
        $data['jabatan'] = $this->m_admin->jabatan();
        $data['instansi'] = $this->m_admin->showInstansi();
        $data['pegawai']=$this->m_admin->lihat_pegawai();
        $this->load->view('design/pegawai');
        $this->load->view('users/pegawai/tambah_pegawai',$data);
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
        redirect('pegawai/data_pegawai');
}
/*data unit keja*/
public function data_unitkerja(){
        $id =  $this->session->userdata('id_ins');
        $data['instansi'] = $this->m_pegawai->unit_kerja($id);
        $this->load->view('design/pegawai');
        $this->load->view('users/pegawai/unit_kerja/data_unitkerja',$data);
        $this->load->view('design/footer');
}

public function ganti_pass() {     
        $data['user']=$this->users_model->user();
        $data['pass']=$this->m_admin->edit_pass();		
        $this->load->view('design/pegawai');
        $this->load->view('Users/pegawai/ganti_pass',$data);
        $this->load->view('design/footer');
}

// perizinan
public function tambah_perizinan_pergi() {    
        $ins=$this->session->userdata('id_ins');
        $data['instansi'] = $this->m_UP->showIns($ins);
        $data['pegawai']=$this->m_admin->lihat_pegawai();
        $this->load->view('design/pegawai');    
        $this->load->view('Users/pegawai/perizinan/tambah_perizinan_pergi',$data);
        $this->load->view('design/footer');
}
public function lihat_data_izin(){
  if($this->input->post('btnsimpan')) {
      $photo = $_FILES["photo"]['name'];
      $config['upload_path']          = './assets/upload/izin/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = $photo;
      // $config['max_size']             = 100;
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;
    $this->upload->initialize($config);
    if ($this->upload->do_upload('photo')) {
      $this->m_perizinan->input_perizinan($photo);
    } else {
        $data = $this->upload->display_errors();                
    }
  }

  $data['izin'] = $this->m_perizinan->lihat_izin();
  $this->load->view('design/pegawai');
  $this->load->view('users/pegawai/perizinan/lihat_data_izin',$data);
  $this->load->view('design/footer');
}

public function uploadPhoto($inputName, $folder) {
  $photo = $_FILES[$inputName]['name'];
  $config['upload_path']          = './assets/upload/'.$folder.'/';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['file_name']            = $photo;
  // $config['max_size']             = 100;
  // $config['max_width']            = 1024;
  // $config['max_height']           = 768;
  $this->upload->initialize($config);
  $this->upload->do_upload($inputName);

  return $photo;
}

public function data_izin(){
    $data['instansi'] = $this->m_admin->showInstansi();
                $data['izin']=$this->m_perizinan->lihat_izin();
                $this->load->view('design/pegawai');
                $this->load->view('users/pegawai/perizinan/data_izin',$data);
                $this->load->view('design/footer');
        }
public function data_libur(){
                $data['libur']=$this->m_admin->lihat_libur();
                $this->load->view('design/pegawai');
                $this->load->view('users/pegawai/libur/data_libur',$data);
                $this->load->view('design/footer');
        }
public function detail_jamkerja(){
                $id =  $this->session->userdata('id_ins');
                $data['jamker']=$this->m_pegawai->showIns($id);
                $this->load->view('design/pegawai');
                $this->load->view('users/pegawai/jam_kerja/detail_jamkerja',$data);
                $this->load->view('design/footer');
            }
                public function tambah_cuti() {  
                        $id =  $this->session->userdata('nip');
                        $data['cuti'] = $this->m_admin->showJenisCuti();
                        $data['pegawai']=$this->m_pegawai->pegawai($id);
                                $this->load->view('design/pegawai');
                                $this->load->view('users/pegawai/cuti/tambah_cuti',$data);
                                $this->load->view('design/footer');
                }
            
                public function lihat_cuti(){
                    $id =  $this->session->userdata('nip');
                    $data['cuti']=$this->m_pegawai->lihat_cuti($id);
                    // var_dump ($data['cuti']=$this->m_admin->lihat_cuti()); exit;
                    $this->load->view('design/pegawai');
                    $this->load->view('users/pegawai/cuti/lihat_cuti',$data);
                    $this->load->view('design/footer');
                    }

                public function simpan_cuti() {  
                        $this->m_pegawai->input_cuti();
                        redirect("users/pegawai/cuti/lihat_cuti");
                }

                
public function presensi_manual(){
        $this->load->view('design/pegawai');
        $this->load->view('users/pegawai/presensi/presensi_manual');
        $this->load->view('design/footer');
        
    }
    public function manual() { 
        //admin
        $data['manual']=$this->m_admin->manual();
        if($this->db->affected_rows() >0){
            $this->session->set_flashdata('msg', '<script>alert("Presensi ditambahkan")</script>');
            redirect('pegawai/presensi_manual');
        }else{
            $this->session->set_flashdata('msg', '<script>alert("Gagal ditambahkan")</script>');
            redirect('cuti/lihat_cuti');
        }
        redirect('pegawai/presensi/presensi_manual');
        }
    
    public function showPresman(){
        $data['presman']=$this->m_admin->show_presman();
        $this->load->view('design/pegawai');
        $this->load->view('users/pegawai/presensi/showPresman',$data);
        $this->load->view('design/footer');
    }

    public function data_presensi(){
        $data['presensi']=$this->m_admin->data_presensi();
        $this->load->view('design/pegawai');
        $this->load->view('users/pegawai/presensi/data_presensi',$data);
        $this->load->view('design/footer');
    }  

    
public function kuisioner(){  
        $data['pkp']=$this->m_admin->input_nilai();
        $data['pkp']=$this->m_admin->pkp();
        $this->load->view('design/pegawai');		
        $this->load->view('Users/pegawai/penilaian_kinerja/kuisioner',$data);
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
        redirect('pegawai/penilaian_kinerja/showNip');
    }

    public function hasil(){
        $data['nilai'] = $this->m_admin->dataPenilaian();
        $this->load->view('design/pegawai');		
        $this->load->view('Users/pegawai/penilaian_kinerja/Hasil', $data);
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
            $this->load->view('design/pegawai');
            $this->load->view('users/pegawai/penilaian_kinerja/kuisioner',$data);
            $this->load->view('design/footer');
    
        }else{

            $this->load->view('design/pegawai');
            $this->load->view('users/pegawai/penilaian_kinerja/showNip');
            $this->load->view('design/footer');
        }
        }

}