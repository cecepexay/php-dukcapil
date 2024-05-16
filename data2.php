<html>
<head><title>Data Review UserID</title>
</head>
<body style = 'margin : 20px; font : 16px arial;'>
<center>
<form action ='index.php' method='POST'>
<input type='submit' name='index' value='Menu Utama'/>
</form>
 <strong><center> Data Review UserID </center></strong>
<?php
include 'koneksi.php';
$query = "SELECT * FROM review_aplikasi"; //the query for get all data in tb_student
$result = mysql_query($query);
$i = 1;
echo "<table border='0' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='orange' align='center'>
		<td> <b> No </b> </td>
        <td> <b> Aplikasi </b> </td>
        <td> <b> No Register </b> </td>
		<td> <b> No Surat Keluar </b> </td>
		<td> <b> Periode </b> </td>
        <td> <b> Action </b> </td>
     </tr>";
while ($data = mysql_fetch_array($result)) //mysql_fetch_array = get the query data into array
{
  echo "<tr align='center'>
  			<td>".$i."</td>
            <td>".$data['aplikasi']."</td>
            <td>".$data['no_register']."</td>
			<td>".$data['no_surat_keluar']."</td>
			<td>".$data['periode']."</td>
            <td> <i> <a href='formupdate1.php?id=".$data['id']."'> Update </a>  <a href='delete1.php?id=".$data['id']."'> Delete </a> </i>
			</td>
       </tr>";
	   $i++;
}
echo "</table>";

?>
</body>
</html>