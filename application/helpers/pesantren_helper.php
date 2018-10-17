<?php 
	function check_login($login)
	{
	if(! $login)
		redirect('users/login');
	}
	function check_user($u,$t)
	{
	if (! $u!=$t)
	$this->session->set_flashdata('msg', '<script>alert("Login First !!")</script>');
		redirect ('users/login');
	
	}
?>