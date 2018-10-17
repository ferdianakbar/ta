<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_UP extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function showIns($ins) {
		$query= $this->db->query("SELECT * from instansi WHERE instansi.id_ins='$ins'");
		return $query->result();
    }
    function datkeg(){
        $ins = $this->input->get('ins');
        $tahun = $this->input->get('tahun');
        $sql = $this->db->query("SELECT * FROM  kegiatan JOIN instansi ON keWHERE id_ins = '$ins' AND tahun = '$tahun'");
        return $sql->result();
        }
}

