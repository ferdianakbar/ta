<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_kamar extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
		public function lihat_kamar(){
	$query= $this->db->query("select * from kamar");
	return $query->result();
	}
public function lihat_santri(){
	$query= $this->db->query("select s.nis, nama_lengkap, tempat_lahir, tanggal_lahir, photo from detail_kamar d join detail_kamar_santri dk on (d.id_detail_kamar=dk.id_detail_kamar) right join santri s on (s.nis=dk.nis) where dk.nis is null");
	return $query->result();
	}
	public function lihat_santri1($id){
	$query= $this->db->query("select s.nis, nama_lengkap, tempat_lahir, tanggal_lahir, photo from detail_kamar_santri dk join santri s on (s.nis=dk.nis) where dk.id_detail_kamar='$id'");
	return $query->result();
	}	
	
public function lihat_asatidz(){
	$query= $this->db->query("select * from asatidz s left join detail_kamar d on(s.nip=d.nip) where id_detail_kamar is null");
	return $query->result();
	}	
	function getKode(){
        $q = $this->db->query("select MAX(RIGHT(id_kamar,2)) as code_max from kamar");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%02s", $tmp);
            }
        }else{
            $code = "01";
        }
        return "K".$code;
    }
	function getKode1(){
        $q = $this->db->query("select MAX(RIGHT(id_detail_kamar,3)) as code_max from detail_kamar");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%03s", $tmp);
            }
        }else{
            $code = "001";
        }
        return "KMR".$code;
    }
	function simpan_kamar(){
		if ($this->input->post('id_kamar')==''){
		$id_kamar=$this->getKode();
	$nama_kamar=$this->input->post('nama_kamar');
	$kapasitas=$this->input->post('kapasitas');
			$this->db->query("insert into kamar (id_kamar, nama_kamar, kapasitas) values('$id_kamar', '$nama_kamar', '$kapasitas')");
		}else{
		$this->db->where('id_kamar',$this->input->post('id_kamar'));
		$this->db->update('kamar',$this->input->post());
	}
	}
	function simpan_detail_kamar(){
	$id_detail_kamar=$this->getKode1();
	$id_kamar= $this->input->post('id_kamar');
	$nip= $this->input->post('nip');
	$tanggal= $this->input->post('tanggal');
		
			$this->db->query("insert into detail_kamar (id_detail_kamar, id_kamar, nip, tanggal) values('$id_detail_kamar', '$id_kamar', '$nip', '$tanggal')");
			
	}
	function simpan_kamar_asatidz(){
			if ($this->input->post('id_detail_kamar')==0){
			$this->db->insert('detail_kamar',$this->input->post());
		}	
	}
	
	function hapus_kamar($id){
		$this->db->where('id_kamar',$id);
		$this->db->delete('kamar');
	}
	function hapus_detail_kamar($id){
		$this->db->where('nis',$id);
		$this->db->delete('detail_kamar_santri');
	}
	function hapus_kamar_asatidz($id){
		$this->db->where('id_detail_kamar',$id);
		$this->db->delete('detail_kamar');
	}
	function edit_kamar($id)
	{
		$this->db->where('id_kamar',$id);
		$query=$this->db->get('kamar');
		return $query->row();
	}
	public function get_nip($id)
    {
        $query=$this->db->query("select a.nip, a.nama_lengkap, a.photo from asatidz a left join detail_kamar k on(k.nip=a.nip) where id_detail_kamar is null and a.nip like '%".$id."%'");
        return $query->result();
    }
	public function lihat_kamar1(){
	$query= $this->db->query("select k.id_kamar, k.nama_kamar, k.kapasitas from kamar k left join detail_kamar ka on(k.id_kamar=ka.id_kamar) where ka.id_detail_kamar is null");
	return $query->result();
	}
	function tampil_kapasitas($id)
    {
        $q = $this->db->query("select kapasitas, ((count(s.id_detail_kamar))) as sisa from kamar k left join detail_kamar d on(k.id_kamar=d.id_kamar) join detail_kamar_santri s on(d.id_detail_kamar=s.id_detail_kamar) where d.id_kamar='$id' ");
        return $q->row();
    }
	
	function lihat_detail()
	{
		$query=$this->db->query("select ka.id_detail_kamar, k.nama_kamar, k.kapasitas, ka.id_kamar as id_kamar, ka.nip, a.nama_lengkap as nama_asatidz, ka.tanggal from asatidz a join detail_kamar ka on(ka.nip=a.nip) join kamar k on(k.id_kamar=ka.id_kamar) order by ka.id_detail_kamar desc limit 1");
		return $query->row();
	}	
	function lihat_detail_kamar()
	{
		$query=$this->db->query("select x.nama_santri as nama_santri, ka.id_detail_kamar as id_detail_kamar, k.nama_kamar as nama_kamar, ka.id_kamar, ka.nip, a.nama_lengkap as nama_asatidz, ka.tanggal from asatidz a join detail_kamar ka on(ka.nip=a.nip) join kamar k on(k.id_kamar=ka.id_kamar) join (select d.id_detail_kamar, s.nis as nis_santri, kas.id_kamar as id_kamar,s.nama_lengkap as nama_santri from santri s join detail_kamar_santri d on(s.nis=d.nis) join detail_kamar kas on(kas.id_detail_kamar=d.id_detail_kamar) ) x on(x.id_kamar=k.id_kamar)");
		return $query->result();
	}
	function lihat_detail_kamar1()
	{
		$query=$this->db->query("select count(x.nis_santri) as jumlah ,ka.id_detail_kamar as id_detail_kamar, k.nama_kamar as nama_kamar, ka.id_kamar, ka.nip, a.nama_lengkap as nama_asatidz,  ka.id_kamar, ka.nip, ka.tanggal from asatidz a join detail_kamar ka on(ka.nip=a.nip) join kamar k on(k.id_kamar=ka.id_kamar) join (select d.id_detail_kamar, s.nis as nis_santri, kas.id_kamar as id_kamar,s.nama_lengkap as nama_santri from santri s join detail_kamar_santri d on(s.nis=d.nis) join detail_kamar kas on(kas.id_detail_kamar=d.id_detail_kamar) ) x on(x.id_kamar=k.id_kamar) group by ka.id_detail_kamar");
		return $query->result();
	}
	
	}