<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class auth extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
    }    
	
public function cek_login() { 
	$username=$_POST['username'];
    $password=$_POST['password'];

	//admin
	$query= $this->db->query("SELECT * FROM user  WHERE id_user= '$username' AND password= '$password' AND akses='admin'");
	//pegawai
	$query1= $this->db->query("SELECT * FROM user WHERE id_user= '$username' AND password= '$password' AND akses='pegawai'");
	
	$query2= $this->db->query("SELECT * FROM user WHERE id_user= '$username' AND password= '$password' AND akses='UP'");

    $data1= $query->row();
	$data2= $query1->row();
	$data3= $query2->row();

    if ($query->num_rows()>0){
	$user_admin =array(
		'logged_in' =>TRUE,
		'nip'=> $data1->nip,
		'nama' => $data1->nama,
		'username'=> $data1->id_user,
		'id_ins'=>$data1->id_ins,
		'akses' => $data1->akses,
		'pass'=> $data1->password,
		'photo' => $data1->photo);
		$this->session->set_userdata($user_admin);
		$this->session->set_flashdata('msg', '<script>alert("Login Berhasil!")</script>');
         redirect('admin');
		 }
		
	elseif ($query1->num_rows()>0) {
	$user_pegawai =array(
		'logged_in' =>TRUE,
        'nip'=> $data2->nip,
		'nama' => $data2->nama,
		'username'=> $data2->id_user,
		'id_ins'=>$data2->id_ins,
		'akses' => $data2->akses,
		'pass'=> $data2->password,
		'photo' => $data2->photo);
		$this->session->set_userdata($user_pegawai);
		$this->session->set_flashdata('msg', '<script>alert("pegawai")</script>');
         redirect('pegawai'); 
		 }

		 elseif ($query2->num_rows()>0) {
			$user_UP =array(
				'logged_in' =>TRUE,
				'nip'=> $data3->nip,
				'nama' => $data3->nama,
				'username'=> $data3->id_user,
				'id_ins'=>$data3->id_ins,
				'akses' => $data3->akses,
				'pass'=> $data3->password,
				'photo' => $data3->photo);
				$this->session->set_userdata($user_UP);
				$this->session->set_flashdata('msg', '<script>alert("UP")</script>');
				 redirect('UP'); 
				 }
		

$this->session->set_flashdata('msg', '<script>alert("Login Gagal! Silahkan cek kembali username dan password anda")</script>');
			redirect('');
         
    }
	public function logout()
	{
		
		$this->session->sess_destroy('');
		redirect('');
	}
	}