<!DOCTYPE html>
<html>
<head>
	<title> Input banyak data ke database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Input banyak data ke database</h1>
	<h2>Data Makanan </h2>
	<table borde="1">
		<tr>
			<th>No</th>
			<th>nama makanan</th>
		</tr>
		<?php
		include "koneksi.php";
		$data = mysql_query("select * from cabang");
		$no = 1;
		while($d = mysql_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $d['cabang']; ?></td>
		</tr>
		<?php } ?>
	</table>
	<br/>
	<h2> Input Bayak data</h2>
	
	<form method="post" action="input1.php">
	<table>
		<tr>
			<td>
				<input type ="checkbox" name="cabang[]" value="Jakarta">
			</td>
			<td>
				Jakarta
			</td>
		</tr>
		<tr>
			<td>
				<input type ="checkbox" name="cabang[]" value="bandung">
			</td>
			<td>
				bandung
			</td>
		</tr>
		<tr>
			<td>
				<input type ="checkbox" name="cabang[]" value="samarinda">
			</td>
			<td>
				samarinda
			</td>
		</tr>
		<tr>
			<td>
				<input type ="checkbox" name="cabang[]" value="jawa tengah">
			</td>
			<td>
				jawa tengah
			</td>
		</tr>
		<tr>
			<td>
				<input type ="submit" name="cabang[]" value="input">
			</td>
		</tr>
	</table>
	</form>
<body>
</html>