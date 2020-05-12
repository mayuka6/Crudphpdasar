<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP 6</title>
</head>

<body>
<h1> Tampilan Data Table User </h1>
<?php

// menginputkan file koneksi
require_once 'koneksi.php';

// melakukan query dan bisa disimpan pada folder seperti dibawah ini
$sql = "select * from user";

// melakukan eksekusi query dan hasilnya disimpan atau ambil hasilnya dalam sebuah variabel
// fungsi dibawah ini membutuhkan 2 parameter : koneksi, query
$hasil = mysqli_query($db,$sql);

?>


<!-- table untuk menampilkan record dari table user -->
<table border="1">

	<th>ID</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	<th>SESSION</th>
    <th>Action</th>
    
    <!-- akan diisi data oleh php -->
    <!-- looping while akan mengeksekusi perintah sampai kondisi tidak terpenuhi -->
	<!-- mysqli_fetch_assoc : adalah untuk mengambil array dalam format asosiatif -->
    
	<?php while($baris = mysqli_fetch_assoc($hasil)){ ?>
		
		
	<tr>
    	<td><?=$baris['id'] ?></td> 
        <!-- kode php// akan berisi ID// menggunakan fetch assoc agar mudah dikenali// id adalah sebuah nama kolom 
        // bentuk pendek dari ke dua -->
        
        <td><?php echo $baris ['username']; ?></td> 
        <!-- kode php// akan berisi USERNAME// ini adalh baris sensitif  -->
        
        <td><?=$baris['password'] ?></td>
        <!-- kode php// akan berisi PASSWORD -->
        
        <td><?=$baris['session'] ?></td> 
        <!-- kode php// akan berisi SESSION -->
        
        <td> 
        <a href="edit.php?uid=<?=$baris['id'] ?>">Edit</a>
        <!-- melewatkan data dengan $_GET['uid'], id itu variabel yang ditulis pada syntax diatas
        (uid) yaitu untuk melatih menarik atau menarik id record data yang fungsinya untuk mencetak data-->
        </td>
     </tr>
	
	<?php } ?>
	

</table>
	<br>
	<!-- link menuju create.php -->
	<a href="create.php">Tambah User</a>

</body>
</html>