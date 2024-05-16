<?php
include "koneksi.php";
?>

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
<table width="500" border="0" cellpadding="5" cellspacing="5">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong><center> Register Data Aplikasi </center></strong>
    </td>
  </tr>
  <tr>
  	<td>Aplikasi</td>
    <td>:</td>
    <td> <input type='text' placeholder='Nama Aplikasi' name='aplikasi'/> </td>
  </tr>

  <tr>
  <?php
$link = mysqli_connect('localhost', 'root', '', 'master_review_user');
$query = "SELECT * FROM divisi ";
$result = mysqli_query($link, $query);
 
$pilihan = '';
$data = array();
 
if (isset($_POST['submit']) && isset($_POST['divisi']))
{
    if (count($_POST['divisi']) > 0)
    {
        $pilihan = serialize($_POST['divisi']);
    }
}

if ($pilihan <> '')
{
    $data = unserialize($pilihan);
}
?>
  	<td>Divisi</td>
    <td>:</td>
    <td>
	 <?php
    while ($row = mysqli_fetch_object($result)) {
        $p = $row->divisi;
        ?>
	<br><input type="checkbox" name="divisi[]" value="<?php echo $p; ?>" <?php echo in_array($p, $data) ? 'checked' : ''; ?>> 
            <?php echo $p; ?></br>
			<?php
    }
    ?>
	</td>
  </tr>
  <tr>
    <?php
// koneksi ke database dan query
$link = mysqli_connect('localhost', 'root', '', 'master_review_user');
$query = "SELECT * FROM wilayah ORDER BY wilayah LIMIT 5";
$result = mysqli_query($link, $query);
 
// variabel awal berupa data kosong
$pilihan = '';
$data = array();
 
//jika ditekan tombol simpan jalankan kode berikut
if (isset($_POST['submit']) && isset($_POST['wilayah']))
{
    // jika datanya berupa array jalankan perintah berikut
    if (count($_POST['wilayah']) > 0)
    {
        // data pilihan berupa array diubah ke serial. data inilah yang disimpan ke database.
        // berupa string seperti berikut ini a:3:{i:0;s:4:"Bali";i:1;s:6:"Banten";i:2;s:8:"Bengkulu";}
        $pilihan = serialize($_POST['wilayah']);
    }
}
 
 
 
 
// ini untuk keperluan edit. ketika $pilihan diambil dari database berupa 
// a:3:{i:0;s:4:"Bali";i:1;s:6:"Banten";i:2;s:8:"Bengkulu";}
// maka akan dikembalikan ke bentuk array untuk centang kembali checkbox terpilih
if ($pilihan <> '')
{
    $data = unserialize($pilihan);
}
?>
  	<td>Wilayah</td>
    <td>:</td>
    <td>
	 <?php
    while ($row = mysqli_fetch_object($result)) {
        $p = $row->wilayah;
        ?>
	<br><input type="checkbox" name="divisi[]" value="<?php echo $p; ?>" <?php echo in_array($p, $data) ? 'checked' : ''; ?>> 
            <?php echo $p; ?></br>
			 <?php
    }
    ?></td>
  </tr>
  <tr>
    <?php
// koneksi ke database dan query
$link = mysqli_connect('localhost', 'root', '', 'master_review_user');
$query = "SELECT * FROM cabang ORDER BY cabang LIMIT 5";
$result = mysqli_query($link, $query);
 
// variabel awal berupa data kosong
$pilihan = '';
$data = array();
 
//jika ditekan tombol simpan jalankan kode berikut
if (isset($_POST['submit']) && isset($_POST['cabang']))
{
    // jika datanya berupa array jalankan perintah berikut
    if (count($_POST['cabang']) > 0)
    {
        // data pilihan berupa array diubah ke serial. data inilah yang disimpan ke database.
        // berupa string seperti berikut ini a:3:{i:0;s:4:"Bali";i:1;s:6:"Banten";i:2;s:8:"Bengkulu";}
        $pilihan = serialize($_POST['cabang']);
    }
}
 
 
 
 
// ini untuk keperluan edit. ketika $pilihan diambil dari database berupa 
// a:3:{i:0;s:4:"Bali";i:1;s:6:"Banten";i:2;s:8:"Bengkulu";}
// maka akan dikembalikan ke bentuk array untuk centang kembali checkbox terpilih
if ($pilihan <> '')
{
    $data = unserialize($pilihan);
}
?>
  	<td>Cabang</td>
    <td>:</td>
	<td>
	<?php
    while ($row = mysqli_fetch_object($result)) {
        $p = $row->cabang;
        ?>
			<br><input type="checkbox" name="divisi[]" value="<?php echo $p; ?>" <?php echo in_array($p, $data) ? 'checked' : ''; ?>> 
            <?php echo $p; ?></br>
			 <?php
    }
    ?></td>
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