<?php  
session_start();
require_once "koneksi.php";

if (empty($_SESSION['usernamenya'])) {
	header("location:index.php");
}


$username=$_SESSION['usernamenya'];

$sqlsess = "SELECT * FROM user_tb WHERE username='$username'"; //1
$hasilsess = mysqli_query($conn, $sqlsess);
$barissess = mysqli_fetch_assoc($hasilsess);

?>