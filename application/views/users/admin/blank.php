
<?php echo $this->session->flashdata('msg');
$password=$calon_santri->password;
$no_pendaftaran=$calon_santri->no_pendaftaran;
$email=$calon_santri->email;
  $nama_lengkap=$calon_santri->nama_lengkap;
  
$this->load->library('My_PHPMailer'); 
  $mail = new PHPMailer();
       $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "rio.pataray@gmail.com";  // user email address
        $mail->Password   = "rachmatpataray";            // password in GMail
        $mail->SetFrom('rio.pataray@gmail.com','SMPIT Imam Bukhari Boarding School');  //Who is sending the email       
        $mail->Subject    = "Verifikasi Pendaftaran";
        $mail->Body      = "<center><h3>SELAMAT PENDAFTARAN AKUN BERHASIL DILAKUKAN</h3></center><br><center><h3>NO REGISTRASI = $no_pendaftaran DAN PASSWORD = $password</center></h3><br><center><h3>GUNAKAN NO REGISTRASI DAN PASSWORD INI UNTUK LOGIN PADA APLIKASI</h3></center><br><center><h3>GUNAKAN NO REGISTRASI DAN PASSWORD INI SELAMA PENERIMAAN SANTRI BARU BERLANGSUNG";
        $mail->AltBody    = "Plain text message";
        $destino = $email; // penerima email
        $mail->AddAddress($destino,$nama_lengkap);
      
        if(!$mail->Send()) {
            $this->session->set_flashdata('msg', '<script>alert("Gagal Di Approve")</script>');
			redirect('admin/lihat_daftar_akun');
        } else {
           $this->session->set_flashdata('msg', '<script>alert("Berhasi Di Approve")</script>');
			$this->db->query("update pendaftaran set status=1 where no_pendaftaran='$no_pendaftaran'");
		
			redirect('admin/lihat_daftar_akun');
        }
  ?>