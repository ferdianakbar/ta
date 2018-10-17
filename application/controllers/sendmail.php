<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class sendmail extends CI_Controller {

function __construct(){
  
parent::__construct();
$this->load->library('My_PHPMailer'); 
}

 public function index()
 {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "rio.pataray@gmail.com";  // user email address
        $mail->Password   = "rachmatpataray";            // password in GMail
        $mail->SetFrom('rio.pataray@gmail.com', 'test email');  //Who is sending the email       
        $mail->Subject    = "test phpmailer (ini bisa dijadikan judul kamu)";
        $mail->Body      = "pesan kami atau isi dari apa yg akan kamu sampaikan";
        $mail->AltBody    = "Plain text message";
        $destino = "kaderisasialfath@gmail.com"; // penerima email
        $mail->AddAddress($destino, "Rio Rachmat Pataray");
      
        if(!$mail->Send()) {
            echo "Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent correctly!";
        }
        } 
}