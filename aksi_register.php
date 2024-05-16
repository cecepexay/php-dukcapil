<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
//file submit.php
//menangkap data yang dikirimkan dari file tambah.php menggunakan method = POST

$aplikasi = $_POST['aplikasi'];
$no_register = $_POST['no_register'];
$no_surat_keluar = $_POST['no_surat_keluar'];
$periode = $_POST['periode'];

//perintah sql
$query="INSERT INTO review_aplikasi VALUES('','$aplikasi','$no_register','$no_surat_keluar','$periode')";

$hasil=mysql_query($query);

if ($hasil)
{
	//header ('location: view.php');
	echo "<center> <b> <font color='red' size='4'><p> data berhasil disimpan</p> </center></b></font><br/>
	<meta http-equiv='refresh' content='2; url=Register.php'/>";
}
else
{
	echo "data gagal disimpan<meta http-equiv='refresh' content='2; url=Register.php'/>";
}
?>