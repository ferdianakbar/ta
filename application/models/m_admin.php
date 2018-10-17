<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
// pegawai
	public function input_pegawai(){
		$data = array(
		'nip'=> $this->input->post('nip'),
		'nama'=> $this->input->post('nama'),
		'golongan'=> $this->input->post('golongan'),
		'jabatan'=> $this->input->post('jabatan'),
		'id_ins'=>$this->input->post('id_ins'),
		'no_enroll'=> $this->input->post('no_enroll'),
		'no_alat'=> $this->input->post('no_alat'),
		);
			
			$this->db->insert('pegawai',$data);
			$query= $this->db->query("select * from pegawai");
			return $query->result();
	}

	function pegawai($id){
		$sql = $this->db->query("SELECT * FROM pegawai JOIN instansi ON instansi.id_ins = pegawai.id_ins WHERE pegawai.nip = '$id'");
		return $sql->result();
	}

	function edit_pegawai($ins){
		$sql = $this->db->query("SELECT * FROM pegawai JOIN instansi ON instansi.id_ins = pegawai.id_ins WHERE pegawai.id_ins = '$ins'");
		return $sql->result();
	}
        
	function lihat_pegawai(){
		$sql = $this->db->query("SELECT * FROM pegawai JOIN instansi ON instansi.id_ins = pegawai.id_ins");
		return $sql->result();
	}
	
	function lihat_pegawaiCombo($ins)
	{
		$sql = $this->db->query("SELECT * FROM pegawai JOIN instansi ON instansi.id_ins = pegawai.id_ins WHERE instansi.id_ins = '$ins'");
		return $sql->result();
	}
	public function update_pegawai(){
	$id = $this->input->post('nip');
	$data = array(
		'nama'=> $this->input->post('nama'),
		'golongan'=> $this->input->post('golongan'),
		'jabatan' => $this->input->post('jabatan'),
		'id_ins'=> $this->input->post('id_ins'),
		'no_enroll'=> $this->input->post('no_enroll'),
		'no_alat'=> $this->input->post('no_alat')
		);
		$this->db->where('nip',$id);
		$this->db->update('pegawai',$data);
	}

	function hapus_pegawai($id){
		$this->db->where('nip',$id);
		$this->db->delete('pegawai');
	}
// unit kerja
	function data_unker($ins){
	$sql = $this->db->query("SELECT * FROM  instansi WHERE id_ins = '$ins'");
	return $sql->result();
}
	public function update_unitkerja(){
	$ins = $this->input->post('id_ins');
	$data = array(
			'nama_ins'=> $this->input->post('nama_ins'),
			'kepala_ins'=> $this->input->post('kepala_ins'),
			'NIPKepala'=> $this->input->post('NIPkepala')
			);
			$this->db->where('id_ins',$ins);
			$this->db->update('instansi',$data);
		}

		public function update_users($photo){
			$nip = $this->input->post('nip');
			$data = array('nama' => $this->input->post('nama'),
										'golongan' => $this->input->post('golongan'),
										'jabatan' => $this->input->post('jabatan'),
										'id_ins' => $this->input->post('id_ins'),
										'no_enroll' => $this->input->post('no_enroll'),
										'no_alat' => $this->input->post('no_alat')
										);
					$this->db->where('nip', $nip);
					$this->db->update('pegawai', $data);
		
			$data2 = array('nama' => $this->input->post('nama'),
											'id_ins' => $this->input->post('id_ins'),
											'photo' => $photo
										);
					$this->db->where('nip', $nip);
					$this->db->update('user', $data2);
		}
// data libur
	public function lihat_libur(){
	$query= $this->db->query("SELECT * from hari_libur");
	return $query->result();
	}
		
	public function input_harilibur(){
		$data = array(
		'tanggal'=> $this->input->post('tanggal'),
		'keterangan'=> $this->input->post('keterangan'),
		);
		
		$this->db->insert('hari_libur',$data);
		$query= $this->db->query("SELECT * from hari_libur");
		return $query->result();
	}

	function hapus_libur($id){
		$this->db->where('id_libur',$id);
		$this->db->delete('hari_libur');
	}
// data kegiatan
	function datkeg(){
	$ins = $this->input->get('ins');
    $tahun = $this->input->get('tahun');
	$sql = $this->db->query("SELECT * FROM  kegiatan WHERE id_ins = '$ins' AND tahun = '$tahun'");
	return $sql->result();
	}

	function showKegiatan(){
		$sql = $this->db->query("SELECT * FROM kegiatan JOIN instansi ON kegiatan.id_ins = instansi.id_ins");
		return $sql->result();
	}
// data user
	function hapus_users($id){
		$this->db->where('id_user',$id);
		$this->db->delete('user');
	}
	
	function edit_users($id){
		$this->db->where('id_user',$id);
		$query=$this->db->get('user');
		return $query->result();
	}

	function simpan_pass(){
		$password=$this->input->post('password');
		$nip= $this->input->post('nip');
		$this->db->query("update user set password='$password' where nip=$nip");
	}

	function edit_pass()
	{
		$this->db->where('nip');
		$query=$this->db->get('user');
		return $query->result();
	}

// show instansi
	function showInstansi() {
		$sql = $this->db->get('instansi');
		return $sql->result();
	}
// show jabatan
	public function jabatan(){
		$query= $this->db->get('jabatan');
		return $query->result();
		}
		
// data cuti
	public function input_cuti(){
		$data = array(
		'nip'=> $this->input->post('nip'),
		'tanggal'=> $this->input->post('tanggal'),
		'jenis_cuti'=> $this->input->post('jenis_cuti'),
		'keterangan'=> $this->input->post('keterangan'),
		);
		$this->db->insert('cuti',$data);
	}

	public function approval_cuti($id){
		$id = $this->uri->segment(3);
		$query = $this->db->query("UPDATE `cuti` SET`status`='diterima' WHERE nip='$id'");
		$query = $this->db->query("UPDATE `pegawai` SET`kuota_cuti`=(kuota_cuti)-1 WHERE nip='$id'");
		}

	public function lihat_cuti(){
		$query= $this->db->query("SELECT * from cuti JOIN pegawai ON pegawai.nip = cuti.nip");
		return $query->result();
	}

	function showJenisCuti() {
		$sql = $this->db->get('jenis_cuti');
		return $sql->result();
	}

	function kurangiKuota(){
		$id = $this->input->post('nip');
		$data = array(
				'kuota_cuti'=> $this->input->post('kuota_cuti')-1
				);
			
				$this->db->where('nip',$id);
				$this->db->update('pegawai',$data);
			}

			public function tolak_cuti($id){
				$id = $this->uri->segment(3);
				$query = $this->db->query("UPDATE `cuti` SET`status`='ditolak' WHERE nip='$id'");
			}

	function pkp(){
		$query = $this->db->query("SELECT * FROM penilaian_kinerja JOIN pegawai ON pegawai.nip = penilaian_kinerja.nip");
		return $query->result();
	}

	function nilaikepemimpinan(){
		$nkepem = ['kepem1','kepem2','kepem3','kepem4','kepem5','kepem6','kepem7'];
		array_sum($nkepem);
	}

	
	public function getDataKuisioner(){
		$query = $this->db->get('penilaian_kinerja');
		$indeks = 0;
		$result = array();
		
		foreach ($query->result_array() as $row){
			$result[$indeks++] = $row;
		}
		
		return $result;
	}

	public function hitungnilaikepemimpinan(){
		$listKuisioner = $this->getDataKuisioner();
		
		$hasil = array(
				'kepem1' => 0,
				'kepem2' => 0,
				'kepem3' => 0,
				'kepem4' => 0,
				'kepem5' => 0,
		);
		
		$jumlahResponden = count($listKuisioner);
		
		foreach ($listKuisioner as $kuisioner){
			foreach ($kuisioner as $kepemimpinan => $nilai){
				if(array_key_exists($kepemimpinan, $hasil)){
					$hasil[$kepemimpinan] += $nilai;
				}
			}
		}
		
		foreach ($hasil as $kepem => $nilai){
			$hasil[$kepem] = $nilai/$jumlahResponden;
		}
		
		return $hasil;
	}

	function inputAtasan($nipe, $sumKepem, $sumKetram, $sumPraka, $sumKerja, $sumKeta, $total){
		$data = array(
			'nip_penilai' => $this->session->userdata('nip'),
			'nip' => $this->input->post('nip'),
			'tingkatan' => $this->input->post('tingkatan'),
			'kepemimpinan' => $sumKepem,
			'ketrampilan' => $sumKetram,
			'prakarsa' => $sumPraka,
			'capaian_kerja' => $sumKerja,
			'ketaatan' => $sumKeta,
			'total_nilai' => $total,
			'waktu_pengisian' => date("Y-m-d H:i:s"),			
			);

			$this->db->insert('penilaian_kinerja',$data);
	}

	function inputTeman($nipe, $sumKerja, $sumKeta, $total){
		$data = array(
			'nip_penilai' => $nipe,
			'nip' => $this->input->post('nip'),
			'tingkatan' => $this->input->post('tingkatan'),
			'kerjasama' => $sumKerja,
			'ketaatan' => $sumKeta,
			'total_nilai' => $total,
			'waktu_pengisian' => date("Y-m-d H:i:s"),			
			);

			$this->db->insert('penilaian_kinerja',$data);
		}

	public function manual(){
		$data = array(
			'nip' =>$this->session->userdata('nip'),
			'tanggal'=>date("Y-m-d"),
			'jamPresensi'=>date("H:i:s"),
		);
			$this->db->insert('presensi_manual',$data);
	}
	
	public function show_presman(){
		$query= $this->db->query("SELECT * FROM presensi_manual JOIN pegawai ON pegawai.nip = presensi_manual.nip");
		return $query->result();
	}

	public function approve(){
		$id = $this->uri->segment(3);
		$data = array(
			'nip'=> $this->input->post('nip'),
			'tanggal'=> $this->input->post('tanggal'),
			'id_ins'=> $this->input->post('id_ins'),
			);
		$this->db->where('nip',$id);
		$this->db->insert('presensi_record_data',$data);
	}

	public function showJamker($ins){
		$query = $this->db->query("SELECT * FROM jam_kerja JOIN instansi ON jam_kerja.id_ins = instansi.id_ins WHERE jam_kerja.id_ins='$ins'");
		return $query->result();
	}
	// function edit_pegawai($id){
		// $sql = $this->db->query("SELECT * FROM unitkerja JOIN instansi ON instansi.id_ins = unitkerja.id_uk");
		// return $sql->result();
	// }

	public function data_presensi(){
		$query= $this->db->query("SELECT * from pegawai INNER JOIN presensi_record_data ON pegawai.nip = presensi_record_data.nip");
		return $query->result();
	}

	public function dataPegawai() {
		$sql = $this->db->query("SELECT * FROM pegawai");
		return $sql->result();
	}
	public function dataPenilaian() {
		$sql = $this->db->query("SELECT * from pegawai INNER JOIN penilaian_kinerja ON pegawai.nip = penilaian_kinerja.nip");
		return $sql->result();
	}
}