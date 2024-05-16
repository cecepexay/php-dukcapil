<?php
include "koneksi.php";
//get the value from form update
 $id = $_POST['id'];
 $nm_aplikasi = $_POST['nm_aplikasi'];
 $divisi = $_POST['divisi'];
 $wilayah = $_POST['wilayah'];
 $cabang = $_POST['cabang'];

//query for update data in database
 $query = "UPDATE aplikasi SET nm_aplikasi = '$nm_aplikasi', divisi = '$divisi', wilayah = '$wilayah', cabang = '$cabang' WHERE id = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "data.php";
	echo "<h4> update data success </h4>";
}
?>
