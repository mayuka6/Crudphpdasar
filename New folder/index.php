<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>PHP 4</title>
</head>
<body>
	<h1>Tampilan Data Tabel User</h1>
	<?php
	//mengikutkan file koneksi
	require_once 'koneksi.php';
	
	//melakukan query 
	$sql ="select *from user";
	
	//eksekusi query dan ambil hasilnya dalam sebuah variabel dg nama hasil
	//fungsi di bawah ini membutuhkan 2 parameter (koneksi, query)
	$hasil = mysqli_query($db,$sql);
	?>
<!-- tabeluntuk menampilkan record dari tabel user -->
	<table border="2">
		<th>ID</th> 		<!-- Membuat judul Tabel dengan nama ID --> 
        <th>Username</th>	<!-- Membuat judul Tabel dengan nama Username -->
        <th>Password</th>	<!-- Membuat judul Tabel dengan nama Password -->
        <th>Session</th>	<!-- Membuat judul Tabel dengan nama Session -->
 		<th>Action</th>		<!-- Membuat judul Tabel dengan nama Action -->
<!-- akan diisi data oleh php -->
<!-- looping while akan mengeksekusi perintah sampai kondisi tidak terpenuhi -->
<!-- fetch assoc: mengambil array dalam format asosiatif -->
<!-- Menggunakan 2 php untuk mengaktifkan syntax <td> pada html -->
        
        <?php while($baris = mysqli_fetch_assoc($hasil)){ ?>  <!-- Pembuka Program PHP serta fungsi while -->     
        <tr> <!-- Mendefinisikan baris pada tabel -->
        	<td><?= $baris['id'] ?></td>		<!--Mengisi baris dalam tabel dengan mengambil id pada database -->
        	<td><?= $baris['username'] ?></td>	<!--Mengisi baris dalam tabel dengan mengambil username pada database -->
        	<td><?= $baris['password'] ?></td>	<!--Mengisi baris dalam tabel dengan mengambil password pada database -->
        	<td><?= $baris['session'] ?></td>	<!--Mengisi baris dalam tabel dengan mengambil session pada database -->
            <td>
            <!-- Melewatkan data dengan $_GET['uid'] -->
            <a href="edit.php?uid=<?= $baris['id'] ?>">Edit</a>
            </td>
        </tr>		
		<?php }?>
	</table>
    <br> <!-- Ganti Baris -->
    <a href="create.php">Tambah User</a> <!-- link menuju create.php -->

</body>
</html>