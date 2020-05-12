<?
require_once 'koneksi.php';
$userId = $_GET['uid']; 
// yang berisi id , yaitu cara mendapatkan nilai dari uid1 pada link dan seterusnya 
// apapun yang kita klik ke linknya maka akan kembali ke idnya

$sql = "select * from user where id = '$userId' limit 1"; 
// untuk menampilkan suatu data yang ada ditabel dengan menggunakan link yang diletakkan di file index.php 
// limit 1 yaitu untuk mencari satu saja tidak mencari yang lain

$hasil = mysqli_query($db,$sql);
// akan berisi data yang sesuai dengan id yang berada pada user id

$baris = mysqli_fetch_assoc($hasil);
// yang diharapkan pada baris ini yaitu hanya satu baris saja  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Tambah User</h1>
        <!-- form untuk inputan dan harus memberi syarat yang bernama <form> dan diberi method
        fungsi method ialah menghubungkan dan metode method ini menggunakan (post) -->
        
        <!-- untuk menginputkan dan ketika menginputkan harus terhubung dengan{ post } -->
        
        <!-- action = yaitu berfungsi untuk menyimpan dan langsung terhubung dengan create
        kenapa dipisah karena untuk memepermudah agar bisa untuk nge link ke data create (disini 
        untuk link dan proses-edit untuk kodenya -->
        
        
        <!-- mebgisi data yang lama untuk diubah -->
        <form method="post" action="proses-edit.php">
        
        <!-- inpId yaitu berguna untuk menghilangkan atau menjadikan edit di tabel menjadi bayang2 ditabel tidak hilang tetapi
        langsung masuk ke link yang ingin diubah, 
        input hidden yaitu untuk melewatkan parameter id-->
        
        <input type="hidden" name="inputId" value="<?=$baris['id']?>">
        <!-- --> 
    <h4>Username</h4>
    	<input type="text" name="inputUser" value="<?=$baris['user']?>">
         <!-- username adalah nama yang berada pada database-->
    <h4>Password</h4>
    	<input type="text" name="inputPass" value="<?=$baris['password']?>">
    <h4>Session</h4>
    	<input type="text" name="inputSess" value="<?=$baris['session']?>">
        
        <br></br>
        
      <!-- untuk membuat tombol Ubah fungsinya untukmengubah data yang diedit -->
    	<button type="submit">UBAH</button>
    	</form>
</body>
</html>