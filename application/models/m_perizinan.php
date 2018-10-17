<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_perizinan extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function lihat_izin(){
	$query= $this->db->query("select * from perizinan");
	return $query->result();
	}

	public function delete($id){
		$id= $this->uri->segment(3);
		$query = $this->db->query("DELETE `perizinan` WHERE nip='$id'");
	}
	
	public function update_izin($id){
		$id = $this->uri->segment(3);
		$query = $this->db->query("UPDATE `perizinan` SET`status`='disetujui' WHERE nip='$id'");
	}
		
	
	public function tolak_izin($id){
		$id = $this->uri->segment(3);
		$query = $this->db->query("UPDATE `perizinan` SET`status`='ditolak' WHERE nip='$id'");
	}

	public function input_perizinan($photo) {		
		$data = array('nip' => $this->input->post('nip'),
						'nama' => $this->input->post('nama'),
						'tgl_pergi' => $this->input->post('tgl_pergi'),
						'tgl_datang' => $this->input->post('tgl_datang'),
						'jam_pergi' => $this->input->post('jam_pergi'),
						'jam_datang' => $this->input->post('jam_datang'),
						'keperluan' => $this->input->post('keperluan'),
						'photo' => $photo);
		$this->db->insert('perizinan', $data);

	}
	
	public function cek_izin_pergi(){
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, id_izin, tanggal_datang, tanggal_pergi, jam_datang, jam_pergi, keperluan from santri s join perizinan p on(p.nis=s.nis) where jenis_izin='pergi' and cek_kedatangan='' order by id_izin desc");
	return $query->result();
	}

	function getKode(){
        $q = $this->db->query("select MAX(RIGHT(id_izin,4)) as code_max from perizinan");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%04s", $tmp);
            }
        }else{
            $code = "0001";
        }
        return "ZN".$code;
    }
	}