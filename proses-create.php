
<?php
//untuk mengeksekusi sebuah file itu harus ada koneksinya

require_once"koneksi.php";

//ini berasal dari file create dengan metode post
// ini variabel  tidak langsung mengisi satu persatu
$user=$_POST['inputUser']; // tidak memakai variabel tidak apa2 tetapi ini mempermudahkan agar tidak sulit
$pass=md5($_POST['inputPass']); 
$sess=$_POST['inputSess'];

// ini variabel langsung
// untuk menginputkan variabelnya dan mengisinya sesuai dengan fieldnya
// $db untuk perwakilan variabel koneksi ke database 
$hasil=mysqli_query($db,"insert into user(username,password,session)
values ('$user','$pass','$sess')");

// untuk mengecek hasil kondisi
	if($hasil==true){
		// echo "Berhasil Disimpan";
		
		header("location:index.php");
		// jika berhasil maka akan kembali ke menu index atau menu utama
	}
	else {
		// echo "Gagal Disimpan";
		
		header("location:create.php");
		// jika tidak berhasil maka tidak akan kembali ke index dan tetap di create atau akan menetap
	}
?>