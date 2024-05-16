<?php
include "koneksi.php";
?>
 <?php
 //koneksi
    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'review_aplikasi');
 ?>
 
 <!DOCTYPE html>
    <html>
    <head>
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
        <title>Cara Membuat Validasi Menghindari Duplicate Entry Menggunakan PHP</title>
    </head>
    <body>
        <form action="" method="post">
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
                   <td><input type="text" name="no_register" placeholder="00/0000/00"></td>
               </tr>
               <tr>
                   <td>No Surat Keluar</td><td>:</td>
                   <td><input type="text" name="no_surat_keluar" placeholder="-"></td>
               </tr>
			    <tr>
                   <td>Periode</td><td>:</td>
                   <td><input type="text" name="tanggal" id="tanggal" placeholder=""></td>
               </tr>
			    </tr>
 <td>Divisi</td><td>:</td>
  <td><input type="text" name="divisi" id="divisi" /></td>
</tr>
<td>Wilayah</td><td>:</td>
  <td><input type="text" name="wilayah" id="wilayah" /></td>
</tr>
<td>Cabang</td><td>:</td>
  <td><input type="text" name="cabang" id="cabang" /></td>
</tr>
               <tr>
                    <td><input type="submit" name="simpan" value="simpan"></td>
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
    </body>
    </html>
 
     <?php
//proses
    if(isset($_POST['simpan'])) {
    $aplikasi=$_POST['aplikasi'];
    $no_register=$_POST['no_register'];
    $no_surat_kelaur=$_POST['no_surat_keluar'];
	$periode=$_POST['periode'];
   
//script validasi data
 
    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM review_aplikasi WHERE no_register='$no_register' or no_surat_keluar='$no_surat_keluar'"));
    if ($cek > 0){
    echo "<script>window.alert('No Register yang anda masukan sudah ada')
    window.location='duplicate.php'</script>";
    }else {
    mysqli_query($conn,"INSERT INTO review_aplikasi(id,aplikasi,no_register, no_surat_keluar,periode)
    VALUES ('','$aplikasi','$no_register','$no_surat_keluar','$periode')");
 
    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='duplicate.php'</script>";
    }
    }
    ?>