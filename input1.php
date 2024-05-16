<?php
include 'koneksi.php';
$cabang = $_POST['$cabang'];
$jumlah_dipilih = count($cabang);

for($x=0;$x<$jumlah_dipilih;$x++){
	mysql_quey("insert into cabang values('','$cabang[$x]')");
	}
	
header ("location:chekbox.php");
?>