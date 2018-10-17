<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pimpinan extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function simpan_pass(){
		$password=$this->input->post('password');
		$username= $this->input->post('id_user');
		$this->db->query("update user set password='$password' where id_user='$username'");
	}
	
	function edit_pass($id)
	{
		$this->db->where('id_user',$id);
		$query=$this->db->get('user');
		return $query->row();
	}
	}