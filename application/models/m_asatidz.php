<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_asatidz extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
		public function lihat_asatidz(){
	$query= $this->db->query("select * from asatidz");
	return $query->result();
	}
function getKode(){
        $q = $this->db->query("select MAX(RIGHT(nip,5)) as code_max from asatidz");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%05s", $tmp);
            }
        }else{
            $code = "00001";
        }
        return date('y').date('m').$code;
    }	
	function simpan_asatidz(){
		if ($this->input->post('nip')==''){
		if (move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_asatidz/'.$_FILES['photo']['name'])){
			 $photo = $_FILES['photo']['name'];
		}
		$nip=$this->getKode();
$nama_lengkap=$this->input->post('nama_lengkap');
$telp=$this->input->post('telp');
$alamat=$this->input->post('alamat');
$tempat_lahir=$this->input->post('tempat_lahir');
$tanggal_lahir=$this->input->post('tanggal_lahir');
			$this->db->query("insert into asatidz (nip, nama_lengkap, telp, photo, tempat_lahir, tanggal_lahir, alamat) values('$nip', '$nama_lengkap', '$telp', '$photo', '$tempat_lahir', '$tanggal_lahir', '$alamat')");
		}else{
		if (move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_asatidz/'.$_FILES['photo']['name'])){
			$this->db->set('photo',$_FILES['photo']['name']);
		}
		$this->db->where('nip',$this->input->post('nip'));
		$this->db->update('asatidz',$this->input->post());
	}
	}
	function hapus_asatidz($id){
		$this->db->where('nip',$id);
		$this->db->delete('asatidz');
	}
	function edit_asatidz($id)
	{
		$this->db->where('nip',$id);
		$query=$this->db->get('asatidz');
		return $query->row();
	}
	}