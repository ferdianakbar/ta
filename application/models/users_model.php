<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
	}
	public function input_users(){
		if ($this->input->post('nip')){
			if (move_uploaded_file($_FILES['photo']['tmp_name'],'assets/upload/foto_users/'.$_FILES['photo']['name'])){
				$photo = $_FILES['photo']['name'];
		 }
			$nip= $this->input->post('nip');
			$nama= $this->input->post('nama');
			$id_user= $this->input->post('id_user');
			$akses=$this->input->post('akses');
			$id_ins= $this->input->post('id_ins');
			$password= $this->input->post('password');	
		$this->db->query("insert into user(nip,nama,id_user,akses,id_ins,password,photo) values ('$nip','$nama','$id_user','$akses','$id_ins','$password','$photo')");
	}
	}

	public function update_users(){
		if ($this->input->post('nip')){
			if (move_uploaded_file($_FILES['photo']['tmp_name'],'assets/upload/foto_users/'.$_FILES['photo']['name'])){
				$photo = $_FILES['photo']['name'];
		 }
			$nip= $this->input->post('nip');
			$nama= $this->input->post('nama');
			$id_user= $this->input->post('id_user');			
			$akses=$this->input->post('akses');
			$id_ins= $this->input->post('id_ins');
			$password= $this->input->post('password');	
			
			$this->db->query("UPDATE `user` SET `nama`='$nama',`nip`='$nip',`id_user`='$id_user',`id_ins`='$id_ins',`akses`='$akses',`password`='$password',`photo`='$photo' WHERE `nip`='$nip';");
	}
}
	function simpan_fotoUser(){
		if (move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_users/'.$_FILES['photo']['name'])){
			$photo = $_FILES['photo']['name'];
		}else{
			if (move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_users/'.$_FILES['photo']['name'])){
				$this->db->set('photo',$_FILES['photo']['name']);
			}
			
			$this->db->insert('user',$this->input->post());
		}
	}
	function showAkses(){
		$sql = $this->db->get('akses');
		return $sql->result();
	}

	function user(){
		$sql = $this->db->query("SELECT * FROM user JOIN instansi ON instansi.id_ins = user.id_ins");
		return $sql->result();
	}

	function edit_user($id){
		$sql = $this->db->query("SELECT * FROM user JOIN instansi ON instansi.id_ins = user.id_ins WHERE user.id_user='$id'");
		return $sql->result();
	}
	function simpanFotoUsers(){
		// move_uploaded_file($_FILES['photo']['tmp_name'],'upload/foto_user/'.$_FILES['photo']['name']){
		// 	$photo = $_FILES['photo']['name']
		// };
		$query = $this->db->query("UPDATE `user` SET`photo`=$photo WHERE nip='$id'");
	}

	function datausersPaging($p,$u)
	{
	if($this->input->post()){
		$kolom=$this->input->post('kolom');
		$txt=$this->input->post('txt');
		$this->db->like($kolom,$txt);
		}
		$this->db->limit($p,$u);
		$query=$this->db->get('users');
		return $query->result();
		}
		

	function datahisPaging($i,$t)
	{
	if($this->input->post()){
		$kolom=$this->input->post('kolom');
		$txt=$this->input->post('txt');
		$this->db->like($kolom,$txt);
		}
		$this->db->limit($i,$t);
		$query=$this->db->get('login_history');
		return $query->result();
	}

	function hapusUsers($id)
	{
		$this->db->where('userid',$id);
		$this->db->delete('users');
	}
	function log()
	{
	$cek=$this->session->userdata('status');
		$user=$this->session->userdata('nama');
		
		$this->db->query("insert into login_history ( usertype, username) values ('$cek','$user')");
		}
	
	function editUsers($id)
	{
		$this->db->where('userid',$id);
		$query=$this->db->get('users');
		return $query->row();
	}
	function cek_login()
	{
	$cek= $this->input->post('status');
	if ($cek=='admin'){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query=$this->db->get('users');
		if ($query->num_rows()>0){
			return $query->row();	
		}
	}
	if ($cek=='pegawai'){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query=$this->db->get('users');
		if ($query->num_rows()>0){
			return $query->row();	
		}
	}
}
}
