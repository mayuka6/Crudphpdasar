<?php
require_once 'koneksi.php'; <!-- Membuka Koneksi -->
$userId = $_GET['uid'];		<!-- mengisi $userId dengan 'uid' -->
$sql = "select * from user where id = '$userId' limit 1";	<!-- Mengambil data dari database pada $userId -->
$hasil = mysqli_query($db,$sql);	<!-- eksekusi query dan mengambil hasilnya dalam sebuah variable hasil -->
$baris = mysqli_fetch_assoc($hasil); <!-- mengambil array dalam format assosiatif -->
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit User</title>
</head>

<body>
	<h1>Edit User</h1> <!-- Menampilkan Tulisan/Header dengan ukuran H1 --> 
<!-- form edit data -->
<form method="POST" action="proses-edit.php"> <!--  membuat form/bingkai, menggunakan metode POST, untuk actionnya langsung menuju ke halaman tersebut-->
<!-- input hidden untuk melewatkan parameter ID -->
	<input type="hidden" name="inpID" value="<?= $baris['id']?>" />  		
    <h6>Username</h6> <!-- Menampilkan Tulisan/Header dengan ukuran H6 -->
    <input type="text" name="inputUser" value="<?= $baris['username']?>" /> <!-- untuk inputan bertipe text -->
    <h6>Password</h6> <!-- Menampilkan Tulisan/Header dengan ukuran H6 -->
    <input type="text" name="inputPass" value="<?= $baris['password']?>" /> <!-- untuk inputan bertipe text -->
    <h6>Session</h6> <!-- Menampilkan Tulisan/Header dengan ukuran H6 -->
    <input type="text" name="inputSess" value="<?= $baris['session']?>" /> <!-- untuk inputan bertipe text -->
    <br />
    <br />
    <button type="submit">Ubah</button> <!-- button untuk simpan ke DB -->
</form> <!-- penutup fungsi form -->
</body>
</html>
