<?php
include 'koneksi.php';
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM aplikasi WHERE id = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
?>
<body style = 'margin : 20px; font : 16px arial;'>
<center>
<form method="post" action="prosesupdate.php">
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
    <td> <input type="text" name="nm_aplikasi" value="<?php echo $data['nm_aplikasi']; ?>"> </td>
  </tr>

  <tr>
  	<td>Divisi</td>
    <td>:</td>
    <td> <input type="text" name="divisi" value="<?php echo $data['divisi']; ?>"></td>
  </tr>
  <tr>
  	<td>Wilayah</td>
    <td>:</td>
    <td> <input type="text" name="wilayah" value="<?php echo $data['wilayah']; ?>"></td>
  </tr>
  <tr>
  	<td>Cabang</td>
    <td>:</td>
    <td> <input type="text" name="cabang" value="<?php echo $data['cabang']; ?>"></td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>
</center>
</body>