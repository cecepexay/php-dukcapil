<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html>
 <Head>
  <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">
  <script>
   $(document).ready(function(){
    $("#tanggal").datepicker({
    })
   })
  </script>
  <title>Register Review User</title>
 </head>
<body style = 'margin : 20px; font : 16px arial;'>
<center>
<form action ='index.php' method='POST'>
<input type='submit' name='index' value='Menu Utama'/>
</form>
<form action ='data2.php' method='POST'>
<input type='submit' name='data2' value='Lihat Data'/>
</form><br>
<table border = '1' cellspacing = '1' cellpadding = '10' style = 'border : #aaa; color: #101; font-famely : arial; fot-size : 12px;'>
<form action="aksi_input.php" method="post">
<tr bgcolor="orange">
	<td height="21" width="300" colspan="3">
     <strong><center> Register Review User </center></strong>
    </td>
</tr>
</table>
  <table>
  <tr>
  <td>Nama Aplikasi</td><td>:</td>
  <td><select name="aplikasi" id="nm_aplikasi" onchange="changeValue(this.value)" >
					<option value=''>-Pilih Aplikasi-</option>
					<?php 
					$result = mysql_query("select * from aplikasi");    
					$jsArray = "var dtMhs = new Array();
";        
					while ($row = mysql_fetch_array($result)) {    
					echo '
						<option value="' . $row['nm_aplikasi'] . '">' . $row['nm_aplikasi'] . '</option>';    
						$jsArray .= "dtMhs['" . $row['nm_aplikasi'] . "'] = {divisi:'" . addslashes($row['divisi']) . "',
						wilayah:'".addslashes($row['wilayah'])."',
						cabang:'".addslashes($row['cabang'])."'};
";    
					}      
					?>    
				</select></td>
 </tr>
    <tr>
  <td>No Register</td><td>:</td>
  <td><input type="text" name="no_register" /></td>
</tr>
 <td>No Surat Keluar</td><td>:</td>
  <td><input type="text" name="no_surat_keluar" /></td>
</tr>
    <tr>
	<td>Periode</td><td>:</td>
  <td><input type="text" name="tanggal" id="tanggal" /></td>
 </tr>
 <td>Divisi</td><td>:</td>
  <td><input type="text" name="divisi" id="divisi" /></td>
</tr>
<td>Wilayah</td><td>:</td>
  <td><input type="text" name="wilayah" id="wilayah" /></td>
</tr>
<td>Cabang</td><td>:</td>
  <td><input type="text" name="cabang" id="cabang" /></td>
</tr><td></td>
 <tr>
  <td></td> <td></td><td colspan="3"><input type="submit" value="Save" name="submit" />
  <input type ='reset' name='Reset' value ='Reset'/></td>
 </tr>
   </table>
  </form>
<script type="text/javascript">    
	<?php 
	echo 
		$jsArray; 
	?>  
	function changeValue(nm_aplikasi){  
		document.getElementById('divisi').value = dtMhs[nm_aplikasi].divisi;  
		document.getElementById('wilayah').value = dtMhs[nm_aplikasi].wilayah; 
		document.getElementById('cabang').value = dtMhs[nm_aplikasi].cabang;
	};  
</script>
</center>
 </body>
</html>