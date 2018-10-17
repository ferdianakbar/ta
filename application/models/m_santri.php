<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_santri extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function simpan_pass(){
		$password=$this->input->post('password');
		$username= $this->input->post('nis');
		$this->db->query("update santri set password='$password' where nis='$username'");
	}
	
	function edit_pass($id)
	{
		$this->db->where('nis',$id);
		$query=$this->db->get('santri');
		return $query->row();
	}	
	
		public function lihat_santri(){
	$query= $this->db->query("select * from santri");
	return $query->result();
	}	
	  function santri_cari($id)
    {
        $q = $this->db->query("select * from santri where concat(20,(substr(nis,3,2)))='$id'");
        return $q->result();
    }
		function simpan_santri(){
	if (move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_profil/'.$_FILES['photo']['name'])){
	$this->db->set('photo',$_FILES['photo']['name']);
	}
		$this->db->where('nis',$this->input->post('nis'));
		$this->db->update('santri',$this->input->post());
	}
	function hapus_santri($id){
		$this->db->where('nis',$id);
		$this->db->delete('santri');
	}
	function edit_santri($id)
	{
		$this->db->where('nis',$id);
		$query=$this->db->get('santri');
		return $query->row();
	}
	public function lihat_perizinan_pulang($id){
	$query= $this->db->query("select cek_kedatangan, photo, p.nis as nis, nama_lengkap, id_izin, tanggal_datang, tanggal_pergi, jam_datang, jam_pergi, keperluan from santri s join perizinan p on(p.nis=s.nis) where s.nis='$id' and jenis_izin='pulang' and cek_kedatangan !=''");
	return $query->result();
	}
	public function perizinan_pulang_cari($bln,$thn,$id){
	$query= $this->db->query("select cek_kedatangan, photo, p.nis as nis, nama_lengkap, id_izin, tanggal_datang, tanggal_pergi, jam_datang, jam_pergi, keperluan from santri s join perizinan p on(p.nis=s.nis) where s.nis='$id' and date_format(tanggal_pergi, '%m') like '%$bln%' and date_format(tanggal_pergi, '%Y') like '%$thn%' and jenis_izin='pulang' and cek_kedatangan !=''");
	return $query->result();
	}
	public function lihat_perizinan_pergi($id){
	$query= $this->db->query("select cek_kedatangan, photo, p.nis as nis, nama_lengkap, id_izin, tanggal_datang, tanggal_pergi, jam_datang, jam_pergi, keperluan from santri s join perizinan p on(p.nis=s.nis) where s.nis='$id' and jenis_izin='pergi' and cek_kedatangan !=''");
	return $query->result();
	}
	public function perizinan_pergi_cari($bln,$thn,$id){
	$query= $this->db->query("select cek_kedatangan, photo, p.nis as nis, nama_lengkap, id_izin, tanggal_datang, tanggal_pergi, jam_datang, jam_pergi, keperluan from santri s join perizinan p on(p.nis=s.nis) where s.nis='$id' and date_format(tanggal_pergi, '%m') like '%$bln%' and date_format(tanggal_pergi, '%Y') like '%$thn%' and jenis_izin='pergi' and cek_kedatangan !=''");
	return $query->result();
	}
	public function lihat_kesehatan($id){
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where s.nis='$id'");
	return $query->result();
	}	
	public function kesehatan_cari($bln,$thn,$id){
	$query= $this->db->query("select * from riwayat_kesehatan k join santri s on(s.nis=k.nis) where s.nis='$id' and date_format(tanggal_sakit, '%m') like '%$bln%' and date_format(tanggal_sakit, '%Y') like '%$thn%'");
	return $query->result();
	}	
	public function lihat_pelanggaran($id){
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where s.nis='$id'");
	return $query->result();
	}	
	public function pelanggaran_cari($bln,$thn,$id){
	$query= $this->db->query("select photo, p.nis as nis, nama_lengkap, jenis_pelanggaran, nama_pelanggaran, jam_pelanggaran, tanggal_pelanggaran, hukuman   from jenis_pelanggaran j join detail_pelanggaran p on(j.id_jenis_pelanggaran=p.id_jenis_pelanggaran) join santri s on(s.nis=p.nis) where s.nis='$id' and date_format(tanggal_pelanggaran, '%m') like '%$bln%' and date_format(tanggal_pelanggaran, '%Y') like '%$thn%'");
	return $query->result();
	}	
	}