<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_kesehatan extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
		public function lihat_kesehatan(){
		if($this->input->post()){
	$bln=$this->input->post('bln');
	$thn=$this->input->post('thn');
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where date_format(tanggal_sakit, '%m') like '%$bln%' and date_format(tanggal_sakit, '%Y') like '%$thn%'");
	}else{
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis)");
	}
	return $query->result();
	}
	public function cetak_kesehatan($bln,$thn){
		if($bln=='-'){
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where date_format(tanggal_sakit, '%Y') like '%$thn%'");
	}else{
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where date_format(tanggal_sakit, '%m') like '%$bln%' and date_format(tanggal_sakit, '%Y') like '%$thn%'");
	}
	return $query->result();
	}	
	
	/**public function kesehatan_cari($bln,$thn){
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where 
	return $query->result();
	}	
	public function kesehatan_cari1($bln,$thn){
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where date_format(tanggal_sakit, '%m')='$bln'");
	return $query->result();
	}	
	public function kesehatan_cari2($bln,$thn){
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where date_format(tanggal_sakit, '%Y')='$thn'");
	return $query->result();
	}**/
	function simpan_kesehatan(){
	$nis=$this->input->post('nis');
$id_riwayat_kes=$this->input->post('id_riwayat_kes');
$tgl=$this->input->post('tanggal_sakit');
$penyakit=$this->input->post('penyakit');
$tindakan=$this->input->post('tindakan');
		if ($this->input->post('id_riwayat_kes')==0){
			$this->db->query("insert into riwayat_kesehatan(id_riwayat_kes,nis, penyakit, tindakan, tanggal_sakit) values('$id_riwayat_kes', '$nis', '$penyakit', '$tindakan', '$tgl')");
		}else{
		$this->db->where('id_riwayat_kes',$this->input->post('id_riwayat_kes'));
		$this->db->update('riwayat_kesehatan',$this->input->post());
	}
	}
	public function g_kesehatan()
	{
		$data=$this->db->query("SELECT distinct date_format(tanggal_sakit, '%Y') as tahun, count(nis) as jumlah FROM riwayat_kesehatan group by date_format(tanggal_sakit, '%Y') order by date_format(tanggal_sakit, '%Y') asc  ");
		return $data;
	}
	public function g_kesehatan1($thn)
	{
		$data=$this->db->query("SELECT distinct date_format(tanggal_sakit, '%M') as bulan, count(nis) as jumlah FROM riwayat_kesehatan where date_format(tanggal_sakit, '%Y') = '$thn' group by date_format(tanggal_sakit, '%M')  order by date_format(tanggal_sakit, '%m') asc ");
		return $data;
	}
	}