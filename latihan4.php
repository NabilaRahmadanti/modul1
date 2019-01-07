<?php
$nama = "Nabila";
$kelas = "XIRPL2";
function tampil_nama(){
  global $nama;
  global $kelas;
  echo "Nama Saya : ".$nama;
  echo "<br>";
  echo "Kelas Saya : ".$kelas;
}
tampil_nama();
 ?>
