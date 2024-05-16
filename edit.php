<?php
include ("koneksi.php");
//menangkap variabel yang di kirim oleh view.php untuk di update
$id=$_POST[id];
$aplikasi=$_POST[nm_aplikasi];
$divisi=$_POST[divisi];
$wilayah=$_POST[wilayah];
$cabang=$_POST[cabang]
 
//Disini query untuk mengupdate
$query= "update review_aplikasi set aplikasi ='$aplikasi', divisi='$divisi', wilayah='$wilayah', cabang='$cabang', where id='$id'";
$exe=mysql_query($query,$conn);
 
//menampilkan laporan hasil update
//jika berhasil maka akan menamplikan update berhasil bos
//jika gagal maka akan menampilkan update gagal bos
if ($exe){
    echo "<script>alert('Update Berhasil Boss')
    location.replace('index.php')</script>";
}else{
    echo "<script>alert('Update Gagal Bos')
    location.replace('index.php')</script>";
}
?>