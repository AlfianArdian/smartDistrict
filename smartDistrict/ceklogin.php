<?php
session_start();

require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM user_tb WHERE username='$username' AND password='$password'";
$hasil=mysqli_query($conn, $sql);
$data=mysqli_fetch_assoc($hasil);


if ($username == $data['username'] && $password == $data['password']) {
			// echo "berhasil";
	$_SESSION['usernamenya'] = $data['username'];
	header("location:penduduk.php");
			
} else {
	echo "<script>
			alert('gagal login');
			document.location.href = 'index.php';
		  </script>";
}


// if($username == "admin" && $password == "admin123"){
//     header("Location: listartikel.php?username=admin");
// }
// else{
//     echo("Identitas salah");
// }
?>