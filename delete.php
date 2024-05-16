<?php
include("koneksi.php");
//menangkap variabel idbuku yang di kirim oleh view.php untuk di hapus
$id=$_GET[id];
 
//query untuk menghapus data
$query="delete from aplikasi where id='$id'";
$exe=mysql_query($query);
 
//laporan untuk data yang dihapus
//berhasil atau tidak data dihapus
if ($exe){
    echo "<script>alert('Data Berhasil Dihapus Boss')
    location.replace('data.php')</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus Bos')
    location.replace('data.php')</script>";
}
?>