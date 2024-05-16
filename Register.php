<?php
include "koneksi.php";

?>

<html>
<head>
<title>Create Master Review</title>
<link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet"/>
<script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">
	<script>
	$(document).ready(function(){
	$("#tanggal").datepicker({})
	})
	</script>

<link href ="css_submit.css" rel="stylesheet" type="text/css">
</head>
<body style = 'margin : 20px; font : 16px arial;'>
<center>
<P>Register data Review</P>
<form method = 'POST' action = 'aksi_register.php'>
<table border = '1' cellspacing = '1' cellpadding = '10' style = 'border : #aaa; color: #101; font-famely : arial; fot-size : 12px;'>
<tr>
	<td> Aplikasi </td>
	<td width='5' align='center'>:</td>
	<td><select name="aplikasi" id="nm_aplikasi" onchange="changeValue(this.value)" >
					<option value=''>-Pilih Aplikasi-</option>
					<?php 
					$result = mysql_query("select * from aplikasi");    
					$jsArray = "var dtMhs = new Array();
";        
					while ($row = mysql_fetch_array($result)) {    
					echo '
						<option value="' . $row['id'] . '">' . $row['nm_aplikasi'] . '</option>';    
						$jsArray .= "dtMhs['" . $row['id'] . "'] = {divisi:'" . addslashes($row['divisi']) . "',
						wilayah:'".addslashes($row['wilayah'])."',
						cabang:'".addslashes($row['cabang'])."'};
";    
					}      
					?>    
				</select>
	</td>
</tr>
<tr>
	<td> No Register </td>
	<td align='center'>:</td>
	<td><input type='text' placeholder='00/0000/00' name='no_register'/></td>
</tr>
<tr>
	<td>No Surat Keluar</td>
	<td align='center'>:</td>
	<td><input type='text' placeholder='-' name='no_surat_keluar'/></td>
</tr>
<tr>
	<td>Periode</td>
	<td align='center'>:</td>
	<td><input type='text' class='input-tanggal' placeholder='M/D/Y' name='periode' id='tanggal'/></td>
</tr>
<tr>
	<td>Divisi</td>
	<td align='center'>:</td>
	<td><input type="text" class="form-control" name="divisi" id="divisi" value="0" readonly="readonly"></td>
</tr>
<tr>
	<td>WIlayah</td>
	<td align='center'>:</td>
	<td><input type="text" class="form-control" name="wilayah" id="wilayah" value="0" readonly="readonly"></td>
</tr>
<tr>
	<td>Cabang</td>
	<td align='center'>:</td>
	<td><input type="text" class="form-control" name="cabang" id="cabang" value="0" readonly="readonly"></td>
</tr>

<tr>
<td colspan='3' align='center'>
<input type='submit' name='submit' value='submit'/>
<input type ='reset' name='Reset' value ='Reset'/></td>
</tr>
</table>
<a href = 'index.php'>INDEX</a></form>
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
</body>
</html>