<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Data</title>
</head>

<body>
	<h1>Tambah Data User</h1>
        <!-- form untuk inputan dan harus memberi syarat yang bernama <form> dan diberi method
        fungsi method ialah menghubungkan dan metode method ini menggunakan (post) -->
        
        <!-- untuk menginputkan dan ketika menginputkan harus terhubung dengan{ post } -->
        
        <!-- action = yaitu berfungsi untuk menyimpan dan langsung terhubung dengan create
        kenapa dipisah karena untuk memepermudah agar bisa untuk nge link ke data create (disini 
        untuk link dan proses-create untuk kodenya -->
        
        <form method="post" action="proses-create.php">
    <h4>Username</h4>
    <input type="text" name="inputUser">
    <h4>Password</h4>
    <input type="text" name="inputPass">
    <h4>Session</h4>
    <input type="text" name="inputSess">
      <!-- untuk membuat tombol simpan -->
    <button type="submit">SIMPAN</button>
    	</form>
    
</body>
</html>