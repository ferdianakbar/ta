<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function jumHadir($nip)
{
  $ci =& get_instance();
  $ci->load->database();
  $query = $ci->db->query("SELECT COUNT(nip) as count FROM presensi_record_data WHERE nip='$nip'");
  $data = $query->result();
  return $data[0]->count;
}

function jumPresensi($colum, $nip)
{
  $ci =& get_instance();
  $ci->load->database();
  $query = $ci->db->query("SELECT SUM($colum) as $colum FROM presensi_record_data WHERE nip='$nip'");
  $data = $query->result();
  return $data[0]->$colum;
}

function klasifikasi($nilai)
{
  if($nilai >= 80 && $nilai <= 100)
  {
    $kla = 100;
  }
  elseif($nilai >= 70 && $nilai <= 80)
  {
    $kla = 90;
  }
  elseif($nilai >= 60 && $nilai <= 70)
  {
    $kla = 80;
  }
  elseif($nilai >= 50 && $nilai <= 60)
  {
    $kla = 70;
  }
  else {
    $kla = 20;
  }
  return $kla;
}

function telat($rentan)
{
  if($rentan >= 80 && $rentan <= 100)
  {
    $TL = 0.5;
  }
  elseif($rentan >= 70 && $rentan <= 80)
  {
    $TL = 1;
  }
  elseif($rentan >= 60 && $rentan <= 70)
  {
    $TL = 1.5;
  }
  elseif($rentan >= 50 && $rentan <= 60)
  {
    $TL = 2;
  }
}