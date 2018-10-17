<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pelanggaran extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
		public function lihat_jenis_langgar(){
	$query= $this->db->query("select * from jenis_pelanggaran order by jenis_pelanggaran");
	return $query->result();
	}
	public function cetak_pelanggaran($bln,$thn){
	if($bln=='-'){
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where date_format(tanggal_pelanggaran, '%Y') like '%$thn%'");
	}else{
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where date_format(tanggal_pelanggaran, '%m') like '%$bln%' and date_format(tanggal_pelanggaran, '%Y') like '%$thn%'");
	}
	return $query->result();
	}	
	public function lihat_pelanggaran(){
	if($this->input->post()){
	$bln=$this->input->post('bln');
	$thn=$this->input->post('thn');
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where date_format(tanggal_pelanggaran, '%m') like '%$bln%' and date_format(tanggal_pelanggaran, '%Y') like '%$thn%'");
	}else{
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis)");
	}
	return $query->result();
	}	
	/**public function pelanggaran_cari($bln,$thn){
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where date_format(tanggal_pelanggaran, '%m')='$bln' and date_format(tanggal_pelanggaran, '%Y')='$thn'");
	return $query->result();
	}
	public function pelanggaran_cari2($bln,$thn){
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where date_format(tanggal_pelanggaran, '%m')='$bln'");
	return $query->result();
	}	
	public function pelanggaran_cari1($bln,$thn){
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where date_format(tanggal_pelanggaran, '%Y')='$thn'");
	return $query->result();
	}*/	
	function simpan_jenis_langgar(){
		if ($this->input->post('id_jenis_pelanggaran')==0){
			$this->db->insert('jenis_pelanggaran',$this->input->post());
		}else{
		$this->db->where('id_jenis_pelanggaran',$this->input->post('id_jenis_pelanggaran'));
		$this->db->update('jenis_pelanggaran',$this->input->post());
	}
	}
	function hapus_jenis_langgar($id){
		$this->db->where('id_jenis_pelanggaran',$id);
		$this->db->delete('jenis_pelanggaran');
	}
	function edit_jenis_langgar($id)
	{
		$this->db->where('id_jenis_pelanggaran',$id);
		$query=$this->db->get('jenis_pelanggaran');
		return $query->row();
	}
	
    function tampil_nama($id)
    {
        $q = $this->db->query("select id_jenis_pelanggaran, nama_pelanggaran from jenis_pelanggaran where jenis_pelanggaran='$id'");
        return $q;
    }
	
	function simpan_pelanggaran(){
			$id=$this->input->post('id_jenis_pelanggaran');
			$nis=$this->input->post('nis');
			$hukuman=$this->input->post('hukuman');
			$jam=$this->input->post('jam_pelanggaran');
			$tanggal=$this->input->post('tanggal_pelanggaran');
			$this->db->query(" insert into detail_pelanggaran (id_jenis_pelanggaran, nis, tanggal_pelanggaran, hukuman, jam_pelanggaran) values('$id', '$nis', '$tanggal', '$hukuman', '$jam')");
	}
	 public function get_nis($id)
    {
        $query=$this->db->query("select * from santri where nis like '%".$id."%'");
        return $query->result();
    }
		 public function get_nis1($id)
    {
        $query=$this->db->query("select nis, nama_lengkap, telp_ayah, photo from santri");
        return $query->result();
    }
	public function g_pelanggaran()
	{
		$data=$this->db->query("SELECT distinct date_format(tanggal_pelanggaran, '%Y') as tahun, count(nis) as jumlah FROM detail_pelanggaran group by date_format(tanggal_pelanggaran, '%Y') order by date_format(tanggal_pelanggaran, '%Y') asc  ");
		return $data;
	}
	public function g_pelanggaran1($thn)
	{
		$data=$this->db->query("SELECT distinct date_format(tanggal_pelanggaran, '%M') as bulan, count(nis) as jumlah FROM detail_pelanggaran where date_format(tanggal_pelanggaran, '%Y') = '$thn' group by date_format(tanggal_pelanggaran, '%M')  order by date_format(tanggal_pelanggaran, '%m') asc ");
		return $data;
	}
	}