<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class penilaian_kinerja extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model(array('m_admin'));
        $this->load->helper('presensi_helper');
    }  

public function kuisioner(){  
        $data['pkp']=$this->m_admin->input_nilai();
        $data['pkp']=$this->m_admin->pkp();
        $this->load->view('design/admin');		
        $this->load->view('Users/admin/penilaian_kinerja/kuisioner',$data);
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
        redirect('penilaian_kinerja/showNip');
    }

    public function hasil(){
        $data['nilai'] = $this->m_admin->dataPenilaian();
        $this->load->view('design/admin');		
        $this->load->view('Users/admin/penilaian_kinerja/Hasil', $data);
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
            $this->load->view('design/admin');
            $this->load->view('users/admin/penilaian_kinerja/kuisioner',$data);
            $this->load->view('design/footer');
    
        }else{

            $this->load->view('design/admin');
            $this->load->view('users/admin/penilaian_kinerja/showNip');
            $this->load->view('design/footer');
        }
        }
}