<?php
session_start();
setcookie($ten_cookie,$_SESSION['ten_dn'],time()-30);
if ($_SESSION['username']) {
	session_destroy();
	header('location:index.php');
}else{
	header('location:index.php');
}


?>