<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
//file submit.php
//menangkap data yang dikirimkan dari file tambah.php menggunakan method = POST

$npp = $_POST['npp'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jabatan = $_POST['jabatan'];
$cabang = $_POST['cabang'];
$password = $_POST['password'];
$no_req = $_POST['no_req'];
$maintenance = $_POST['maintenance'];
$tanggal = $_POST['tanggal'];


//perintah sql
$query="INSERT INTO data_user VALUES('','$npp','$nama','$nik','$jabatan','$cabang','$password','$no_req','$maintenance','tanggal')";

$hasil=mysql_query($query);

if ($hasil)
{
if(empty($npp) or empty($nama) or empty ($nik) or empty ($jabatan) or empty ($cabang) or empty ($password) or empty ($no_req) or empty ($maintenance) or empty ($tanggal)){
  echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('index.php');</script>";
 }
 else
{
	//header ('location: view.php');
	echo "<center> <b> <font color='red' size='4'><p> data berhasil disimpan</p> </center></b></font><br/>
	<meta http-equiv='refresh' content='2; url=index2.php'/>";
}
else
{
	echo "data gagal disimpan<meta http-equiv='refresh' content='2; url=index2.php'/>";
}
}
?>