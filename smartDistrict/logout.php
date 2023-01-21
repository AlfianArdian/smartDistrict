<?php  
session_start();

$_SESSION['usernamenya'] = '';
unset($_SESSION['usernamenya']);

//session terdaftar, saatnya logout
session_unset();
session_destroy();

//variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
header('Location:index.php');

?>