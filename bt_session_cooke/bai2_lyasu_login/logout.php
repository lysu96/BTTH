<?php
session_start();
setcookie("siteAuth", "Admin", time()-2592000);
if ($_SESSION['username']) {
	session_destroy();
	header('location:index.php');
}else{
	header('location:index.php');
}


?>