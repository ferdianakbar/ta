<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_daftar extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function simpan_pass(){
		$password=$this->input->post('password');
		$nisn= $this->input->post('nisn');
		$this->db->query("update calon_santri set password='$password' where nisn=$nisn");
	}
	
	function edit_pass($id)
	{
		$this->db->where('nisn',$id);
		$query=$this->db->get('calon_santri');
		return $query->row();
	}
	function password(){
		$gpass=NULL;
		$n = 6;	// <--- banyaknya karakter yang diinginkan
		$chr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvqxyz0123456789@"; //kombinasi karakter
		for($i=0;$i<$n;$i++){
			$rIdx = rand(1,strlen($chr));
			$gpass .=substr($chr,$rIdx,1);
		}
		return $gpass;
	}
	 function getKode(){
        $q = $this->db->query("select MAX(RIGHT(no_pendaftaran,5)) as code_max from pendaftaran");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%05s", $tmp);
            }
        }else{
            $code = "00001";
        }
        return "IMB".date('y').$code;
    }
	
	function simpanAkun(){
	
	$nama_lengkap=$this->input->post('nama_lengkap');
	/* $file = date("F,j,Y") . ' foto ' . $nama_lengkap;
            $config['upload_path'] = './upload/foto_profil';
            $config['allowed_types'] = 'png|jpg';
            $config['max_size'] = 2 * 1024;
            $config['file_name'] = $file;
            $this->load->library('upload', $config);
            $data['upload_data'] = '';

            if (!$this->upload->do_upload('photo')) {
                $this->alert->custom('danger', 'Kesalahan', $this->upload->display_errors());
                redirect();
            } else {
                echo '';
            }

           // $data_berkas = 
            $nama_berkas = $this->upload->data()['orig_name']; // get path / name file to be saved to the database

             End Section 
			$file1 = date("F,j,Y") . ' buktiBayar ' . $nama_lengkap;
            $config1['upload_path'] = './upload/bayar';
            $config1['allowed_types'] = 'png|jpg';
            $config1['max_size'] = 2 * 1024;
            $config1['file_name'] = $file1;

            $this->load->library('upload', $config1);

            $data1['upload_data'] = '';

            if (!$this->upload->do_upload('bayar')) {
                $this->alert->custom('danger', 'Kesalahan', $this->upload->display_errors());
                redirect();
            } else {
                echo '';
            }

            //$data_berkas1 = 
            $nama_berkas1 = $this->upload->data()['orig_name']; // get path / name file to be saved to the database

            /* End Section */
			
			if (move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_profil/'.$_FILES['photo']['name'])){
			 $photo = $_FILES['photo']['name'];
		}
		if (move_uploaded_file($_FILES['bayar']['tmp_name'],'upload/bayar/'.$_FILES['bayar']['name'])){
			$bayar=$_FILES['bayar']['name'];
		}
	
	 $password=$this->password();
	 $no_pendaftaran=$this->getKode();
	$email=$this->input->post('email');
	$telp=$this->input->post('telp');
	$tanggal_daftar=$this->input->post('tanggal_daftar');
	$status=$this->input->post('status');
	$nisn=$this->input->post('nisn');
	
		$this->db->query("insert into calon_santri(photo, nama_lengkap, email, telp, bayar, nisn,password) values ('$photo','$nama_lengkap','$email','$telp','$bayar','$nisn','$password')");
		$this->db->query("insert into pendaftaran(no_pendaftaran, nisn, status, tanggal_daftar) values ('$no_pendaftaran','$nisn','$status','$tanggal_daftar')");
	}
	public function lihat_formulir($id){
	$query= $this->db->query("select * from calon_santri c join pendaftaran p on (c.nisn=p.nisn) where c.nisn='$id'");
	return $query->row();
	}
	public function lihat_calon(){
	$query= $this->db->query("select nama_sd, no_pendaftaran, nama_lengkap, c.nisn, photo, telp, alamat_lengkap, tempat_lahir, tanggal_lahir from calon_santri c join pendaftaran p on (c.nisn=p.nisn) where status=1");
	return $query->result();
	}
	public function g_calon(){
	$query= $this->db->query("select count(no_pendaftaran) as jumlah, concat(20,(substr(no_pendaftaran,4,2))) as tahun from calon_santri c join pendaftaran p on (c.nisn=p.nisn) where status=1 group by concat(20,(substr(no_pendaftaran,4,2)))");
	return $query->result();
	}
	public function calon_cari($id){
	$query= $this->db->query("select nama_sd, no_pendaftaran, nama_lengkap, c.nisn, photo, telp, alamat_lengkap, tempat_lahir, tanggal_lahir from calon_santri c join pendaftaran p on (c.nisn=p.nisn) where status=1 and concat(20,(substr(no_pendaftaran,4,2))) ='$id' ");
	return $query->result();
	}
	function simpan_form_daftar(){
	if (move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_profil/'.$_FILES['photo']['name'])){
	$this->db->set('photo',$_FILES['photo']['name']);
	}
		$this->db->where('nisn',$this->input->post('nisn'));
		$this->db->update('calon_santri',$this->input->post());
	}
	public function lihat_nilai_tes(){
	if($this->input->post()){
	$thn=$this->input->post('thn');
	$ket=$this->input->post('ket');
	if($ket==''){
	$query= $this->db->query("select nama_sd, keterangan, id_nilai, photo, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where concat(20,(substr(no_pendaftaran,4,2))) like '%$thn%'");
	}else{
	$query= $this->db->query("select nama_sd, keterangan, id_nilai, photo, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where keterangan = '$ket' and concat(20,(substr(no_pendaftaran,4,2))) like '%$thn%'");
	}
	}else{
		$query= $this->db->query("select nama_sd, keterangan, id_nilai, photo, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn)");
	}
	return $query->result();
	}
	public function cetak_nilai($ket,$thn){
	if($ket=='-'){
	$query= $this->db->query("select nama_sd, keterangan, id_nilai, photo, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where concat(20,(substr(no_pendaftaran,4,2))) like '%$thn%'");
	}else if($ket != '-' and $thn != ''){
	$query= $this->db->query("select nama_sd, keterangan, id_nilai, photo, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where concat(keterangan,'-') ='$ket' and concat(20,(substr(no_pendaftaran,4,2))) like '%$thn%'");
	}else{
		$query= $this->db->query("select nama_sd, keterangan, id_nilai, photo, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where keterangan like '%$ket%' and concat(20,(substr(no_pendaftaran,4,2))) like '%$thn%'");
	}
	
	return $query->result();
	}	
	public function g_nilai_tes(){
	$query= $this->db->query("select date_format(pd.tanggal_daftar, '%Y') as tahun, count(b.no_pendaftaran) as lulus, count(x.no_pendaftaran) as tidak from (select no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where keterangan= 'LULUS') b right join pendaftaran pd on (pd.no_pendaftaran=b.no_pendaftaran) left join (select no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where keterangan= 'TIDAK LULUS') x on (x.no_pendaftaran=pd.no_pendaftaran) group by date_format(pd.tanggal_daftar, '%Y')");
	return $query->result();
	}		
	
	/*public function nilai_tes_cari($id,$ket){
	$query= $this->db->query("select nama_sd, keterangan, id_nilai, nama_lengkap, photo, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where keterangan='$ket' and concat(20,(substr(no_pendaftaran,4,2))) ='$id'");
	return $query->result();
	}
	public function nilai_tes_cari1($id){
	$query= $this->db->query("select nama_sd, keterangan, id_nilai, nama_lengkap, photo, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, nilai_wawancara, photo, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where concat(20,(substr(no_pendaftaran,4,2))) ='$id'");
	return $query->result();
	}*/
	
	function simpan_nilai_tes(){
		if ($this->input->post('id_nilai')==''){
		$id_nilai= $this->input->post('id_nilai');
		$nisn=$this->input->post('nisn');
		$nilai_pai=$this->input->post('nilai_pai');
		$nilai_inggris=$this->input->post('nilai_inggris');
		$nilai_indonesia=$this->input->post('nilai_indonesia');
		$nilai_matematika=$this->input->post('nilai_matematika');
		$nilai_wawancara=$this->input->post('nilai_wawancara');
		$nilai_sholat=$this->input->post('nilai_sholat');
		$nilai_quran=$this->input->post('nilai_quran');
		$nilai_akhir=((($nilai_pai+$nilai_matematika+$nilai_indonesia+$nilai_inggris)/4)*30/100) + ($nilai_quran*30/100) + ($nilai_sholat*20/100) + ($nilai_wawancara*20/100);
		if ($nilai_akhir >= 60 ){
		  $keterangan= "LULUS";
		  }else{
		  $keterangan= "TIDAK LULUS";
		  }
			$this->db->query("insert into nilai_tes (nisn, id_nilai, nilai_pai, nilai_inggris, nilai_matematika, nilai_indonesia, nilai_quran, nilai_sholat, nilai_wawancara, keterangan) values('$nisn', '$id_nilai', '$nilai_pai', '$nilai_inggris', '$nilai_matematika', '$nilai_indonesia', '$nilai_quran', '$nilai_sholat', '$nilai_wawancara', '$keterangan')");
		}else{
		$id_nilai= $this->input->post('id_nilai');
		$nisn=$this->input->post('nisn');
		$nilai_pai=$this->input->post('nilai_pai');
		$nilai_inggris=$this->input->post('nilai_inggris');
		$nilai_indonesia=$this->input->post('nilai_indonesia');
		$nilai_matematika=$this->input->post('nilai_matematika');
		$nilai_wawancara=$this->input->post('nilai_wawancara');
		$nilai_sholat=$this->input->post('nilai_sholat');
		$nilai_quran=$this->input->post('nilai_quran');
		$nilai_akhir=((($nilai_pai+$nilai_matematika+$nilai_indonesia+$nilai_inggris)/4)*30/100) + ($nilai_quran*30/100) + ($nilai_sholat*20/100) + ($nilai_wawancara*20/100);
		if ($nilai_akhir >= 60 ){
		  $keterangan= "LULUS";
		  }else{
		  $keterangan= "TIDAK LULUS";
		  }
		  $this->db->query("update nilai_tes set nisn='$nisn', nilai_pai='$nilai_pai', nilai_inggris='$nilai_inggris', nilai_matematika='$nilai_matematika', nilai_indonesia='$nilai_indonesia', nilai_wawancara='$nilai_wawancara', nilai_sholat='$nilai_sholat', nilai_quran='$nilai_quran', keterangan='$keterangan' where id_nilai='$id_nilai'");
	}
	}

	function edit_nilai_tes($id)
	{
		$query=$this->db->query("select id_nilai, keterangan, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, photo, nilai_wawancara, no_pendaftaran from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where n.id_nilai='$id'");
		return $query->row();
	}
	function lihat_kelulusan($id)
	{
		$query=$this->db->query("select keterangan, id_nilai, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, p.nisn as nisn, photo, nilai_wawancara, no_pendaftaran ,keterangan from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on(c.nisn=p.nisn) where p.no_pendaftaran='$id'");
		return $query->row();
	}
	function get_allCalon($id) {
        	$query= $this->db->query("select concat(no_pendaftaran,' (',nama_lengkap,')') as tampil, photo, id_nilai, p.nisn as nisn, nama_lengkap, nilai_pai, nilai_indonesia, nilai_matematika, nilai_inggris, nilai_quran, nilai_sholat, nilai_wawancara, no_pendaftaran from nilai_tes n right join calon_santri c on(c.nisn=n.nisn) right join pendaftaran p on(c.nisn=p.nisn) where n.nisn is null and no_pendaftaran like '%".$id."%'");
	
	return $query->result();
	}
	public function lihat_daftar_ulang(){
	$query= $this->db->query("select no_pendaftaran, c.nama_lengkap, c.nisn, c.photo, c.telp, c.alamat_lengkap, c.tempat_lahir, c.tanggal_lahir from santri s right join calon_santri c on(c.nisn=s.nisn) join pendaftaran p on (c.nisn=p.nisn) join nilai_tes n on (n.nisn=p.nisn) where keterangan='LULUS' and nis is null");
	return $query->result();
	}
	function getNIS(){
        $q = $this->db->query("select MAX(RIGHT(nis,3)) as code_max from santri");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%03s", $tmp);
            }
        }else{
            $code = "001";
        }
        return "10".date('y').$code;
    }
	public function daftar_ulang($id){
	$niss=$this->getNIS();
	$query=$this->db->query("INSERT INTO santri(nama_lengkap, nama_panggilan, tempat_lahir, tanggal_lahir, kewarganegaraan, bahasa, anakke, jml_saudara, kandung, tiri, angkat, berat, tinggi, gol_darah, penyakit, tinggal_bersama, alamat_lengkap, telp, nama_sd, alamat_sd, nama_ayah, tempat_lahir_ayah, alamat_ayah, telp_ayah, pend_terakhir_ayah, pekerjaan_ayah, alamat_kantor_ayah, penghasilan_ayah, tanggungan_istri, tanggungan_anak, tanggungan_lain, nama_ibu, tempat_lahir_ibu, alamat_ibu, telp_ibu,pend_terakhir_ibu, pekerjaan_ibu,alamat_kantor_ibu, penghasilan_ibu, nama_wali, tempat_lahir_wali, hubungan_keluarga, alamat_wali, telp_wali, pend_terakhir_wali, pekerjaan_wali, alamat_kantor_wali,penghasilan_wali, motivasi, password, email, photo, tanggal_lahir_ayah, tanggal_lahir_ibu, tanggal_lahir_wali, no_ijazah, tahun_ijazah, nisn, nis) SELECT nama_lengkap, nama_panggilan, tempat_lahir, tanggal_lahir, kewarganegaraan, bahasa, anakke, jml_saudara, kandung, tiri, angkat, berat, tinggi, gol_darah, penyakit, tinggal_bersama, alamat_lengkap, telp, nama_sd, alamat_sd, nama_ayah, tempat_lahir_ayah, alamat_ayah, telp_ayah, pend_terakhir_ayah, pekerjaan_ayah, alamat_kantor_ayah, penghasilan_ayah, tanggungan_istri, tanggungan_anak, tanggungan_lain, nama_ibu, tempat_lahir_ibu, alamat_ibu, telp_ibu,pend_terakhir_ibu, pekerjaan_ibu,alamat_kantor_ibu, penghasilan_ibu, nama_wali, tempat_lahir_wali, hubungan_keluarga, alamat_wali, telp_wali, pend_terakhir_wali, pekerjaan_wali, alamat_kantor_wali,penghasilan_wali, motivasi, password, email, photo, tanggal_lahir_ayah, tanggal_lahir_ibu, tanggal_lahir_wali, no_ijazah, tahun_ijazah, nisn, '$niss' FROM calon_santri c WHERE c.nisn='$id'");

	}
	}