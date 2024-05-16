<?php
include "koneksi.php";
//get the value from form update
 $id = $_POST['id'];
 $aplikasi = $_POST['aplikasi'];
 $no_register = $_POST['no_register'];
 $no_surat_keluar = $_POST['no_surat_keluar'];
 $periode = $_POST['periode'];

//query for update data in database
 $query = "UPDATE review_aplikasi SET aplikasi = '$aplikasi', no_register = '$no_register', no_surat_keluar = '$no_surat_keluar', periode = '$periode' WHERE id = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "data2.php";
	echo "<h4> update data success </h4>";
}
?>
