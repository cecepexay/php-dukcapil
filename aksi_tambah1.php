<?php
$con = mysqli_connect("localhost","root","","master_review_user");
 
$npp = $_POST['npp'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jabatan = $_POST['jabatan'];
$cabang = $_POST['cabang'];
$password = $_POST['password'];
$no_req = $_POST['no_req'];
$maintenance = $_POST['maintenance'];
$tanggal = $_POST['tanggal'];
 
if(isset($submit)){
 if(empty($npp) or empty($nama) or empty ($nik) or empty ($jabatan) or empty ($cabang) or empty ($password) or empty ($no_req) or empty ($maintenance) or empty ($tanggal)){
  echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('index.php');</script>";
 }
 else{
  $ins = mysqli_query($con,"insert into aplikasi(npp,nama,nik,jabatan,cabang,password,no_req,maintenance,tanggal) values ('$npp','$nama','$nik','$jabatan','$cabang','$password','$no_req','$maintenance','$tanggal')");
  echo"<script>window.alert('Data Berhasil diupload');window.location=('index.php');</script>";
 }
}
?>