<?php
include 'koneksi.php';
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM review_aplikasi WHERE id = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
?>
<body style = 'margin : 20px; font : 16px arial;'>
<center>
<form method="post" action="prosesupdate1.php">
<table width="100" border="0" cellpadding="5" cellspacing="5">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong><center> Form Update Data Aplikasi</center></strong>
    </td>
	<tr>
  	<td>No</td>
    <td>:</td>
    <td> <input type="text" name="id" value="<?php echo $data['id']; ?>"> </td>
  </tr>

  <tr>
  	<td>Aplikasi</td>
    <td>:</td>
    <td> <input type="text" name="aplikasi" value="<?php echo $data['aplikasi']; ?>"> </td>
  </tr>

  <tr>
  	<td>No Register</td>
    <td>:</td>
    <td> <input type="text" name="no_register" value="<?php echo $data['no_register']; ?>"></td>
  </tr>
  <tr>
  	<td>No Surat Keluar</td>
    <td>:</td>
    <td> <input type="text" name="no_surat_keluar" value="<?php echo $data['no_surat_keluar']; ?>"></td>
  </tr>
  <tr>
  	<td>Periode</td>
    <td>:</td>
    <td> <input type="text" name="periode" value="<?php echo $data['periode']; ?>"></td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>
</center>
</body>