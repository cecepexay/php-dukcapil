<html>
<head><title>Register Review User</title>
</head>
<body style = 'margin : 20px; font : 16px arial;'>
<center>
<form action ='index.php' method='POST'>
<input type='submit' name='index' value='Menu Utama'/>
</form>
 <strong><center> Register Review User </center></strong>
<?php
include 'koneksi.php';
$query = "SELECT * FROM aplikasi"; //the query for get all data in tb_student
$result = mysql_query($query);
$i = 1;
echo "<table border='0' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='orange' align='center'>
		<td> <b> No </b> </td>
        <td> <b> Aplikasi </b> </td>
        <td> <b> Divisi </b> </td>
		<td> <b> Wilayah </b> </td>
		<td> <b> Cabang </b> </td>
        <td> <b> Action </b> </td>
     </tr>";
while ($data = mysql_fetch_array($result)) //mysql_fetch_array = get the query data into array
{
  echo "<tr align='center'>
  			<td>".$i."</td>
            <td>".$data['nm_aplikasi']."</td>
            <td>".$data['divisi']."</td>
			<td>".$data['wilayah']."</td>
			<td>".$data['cabang']."</td>
            <td> <i> <a href='formupdate.php?id=".$data['id']."'> Update </a>  <a href='delete.php?id=".$data['id']."'> Delete </a> </i>
			</td>
       </tr>";
	   $i++;
}
echo "</table>";

?>
</body>
</html>