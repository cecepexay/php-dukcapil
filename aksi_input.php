<?php
$con = mysqli_connect("localhost","root","","master_review_user");
 
$aplikasi = $_POST['aplikasi'];
$no_register = $_POST['no_register'];
$no_surat_keluar =$_POST['no_surat_keluar'];
$tanggal = $_POST['tanggal'];
$submit = $_POST['submit'];
 
function ubahTanggal($periode){
 $pisah = explode('/',$periode);
 $array = array($pisah[2],$pisah[0],$pisah[1]);
 $satukan = implode('-',$array);
 return $satukan;
}
 
$tgl_terbit = ubahTanggal($tanggal);
 
if(isset($submit)){
 if(empty($aplikasi) or empty($no_register) or empty ($no_surat_keluar) or empty ($tanggal)){
  echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('input.php');</script>";
 }else{
  $ins = mysqli_query($con,"insert into review_aplikasi(aplikasi,no_register,no_surat_keluar,periode) values ('$aplikasi','$no_register','$no_surat_keluar','$tgl_terbit')");
  echo"<script>window.alert('Data Berhasil diupload');window.location=('input.php');</script>";
 }
}
 
?>