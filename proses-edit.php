<?
// buat kode update data

require_once "koneksi.php";

$uid = $_POST['inputId'];
$user = $_POST['inputUser'];
$pass =$_POST['inputPass'];
$sess = $_POST ['inputSess'];

$sql = "UPDATE user SET username='$user', password = '$pass', session='$sess'
WHERE id='$uid'";
 
 $hasil = mysqli_query($db,$sql);
 
 if ($hasil==true){
	 header("location:index.php");
 } else {
	 header("location:edit.php");
 }


?>