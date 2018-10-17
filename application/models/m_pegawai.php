<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pegawai extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function showPegawai($id){
		$sql = $this->db->query("SELECT * FROM pegawai JOIN user ON pegawai.nip = user.nip WHERE pegawai.nip ='$id'");
		return $sql->result();
    }
    
    function unit_kerja($id){
		$sql = $this->db->query("SELECT * FROM user JOIN instansi ON instansi.id_ins = user.id_ins WHERE user.id_ins='$id'");
		return $sql->result();
    }
    
    function showIns($id){
		$sql = $this->db->query("SELECT * FROM user JOIN jam_kerja ON jam_kerja.id_ins = user.id_ins JOIN instansi ON user.id_ins=instansi.id_ins WHERE user.id_ins='$id'");
		return $sql->result();
    }

    function pegawai($id){
      $sql = $this->db->query("SELECT * FROM pegawai WHERE pegawai.nip='$id'");
      return $sql->result();
    }

    public function lihat_cuti($id){
      $query= $this->db->query("SELECT * from cuti JOIN pegawai ON pegawai.nip = cuti.nip WHERE pegawai.nip='$id'");
      return $query->result();
    }
    public function input_cuti(){
      $data = array(
      'nip'=> $this->input->post('nip'),
      'tanggal'=> $this->input->post('tanggal'),
      'jenis_cuti'=> $this->input->post('jenis_cuti'),
      'keterangan'=> $this->input->post('keterangan'),
      );
      $this->db->insert('cuti',$data);
    }

}