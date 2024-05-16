<html>
<head>
<title>Register Data Aplikasi</title>
<link href ="css_submit.css" rel="stylesheet" type="text/css">
</head>
<center>
<body style = 'margin : 20px; font : 16px arial;'>
<form action ='data.php' method='POST'>
<input type='submit' name='data' value='View Data'/>
</form>
<form action ='input.php' method='POST'>
<input type='submit' name='index' value='Create Master Review User'/>
</form>
</center>
<center>
<form method="post" action="aksi_tambah1.php">
<table width="100" border="0" cellpadding="5" cellspacing="5">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong><center> Register Data Aplikasi </center></strong>
    </td>
  </tr>
  <tr>
  	<td>NPP</td>
    <td>:</td>
    <td> <input type='text' placeholder='NPP Pegawai' name='npp'/> </td>
  </tr>

  <tr>
  	<td>Nama</td>
    <td>:</td>
    <td><input type='text' placeholder='Nama Pegawai' name='nama'/></td>
  </tr>
  <tr>
  	<td>NIK</td>
    <td>:</td>
    <td><input type='text' placeholder='NIK' name='NIK'/></td>
  </tr>
  <tr>
  	<td>Jabatan</td>
    <td>:</td>
    <td><input type='text' placeholder='Jabatan Pegawai' name='jabatan'/></td>
  </tr>
   <tr>
  	<td>Divisi / Cabang</td>
    <td>:</td>
    <td> <input type='text' placeholder='Divisi / Cabang' name='cabang'/> </td>
  </tr>

  <tr>
  	<td>Password</td>
    <td>:</td>
    <td><input type='text' placeholder='Password' name='password'/></td>
  </tr>
  <tr>
  	<td>No_Req</td>
    <td>:</td>
    <td><input type='text' placeholder='No Request' name='no_req'/></td>
  </tr>
  <tr>
  	<td>Maintenance</td>
    <td>:</td>
    <td><input type='text' placeholder='Create Reset Update' name='maintenance'/></td>
  </tr>
  <tr>
  	<td>Tanggal</td>
    <td>:</td>
    <td><input type='text' placeholder='Tanggal' name='tanggal'/></td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  	<input type="submit" name="submit" value="Save"/>
	<input type ='reset' name='reset' value ='Reset'/></td>
  </tr>
</table>
</form>
</center>
</body>
</html>