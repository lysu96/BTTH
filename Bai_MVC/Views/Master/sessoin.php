<?php 
session_start();
if (!isset($_SESSION['id']) || (trim($_SESSION['id'])=='')) {
	header("location:index.php?Controllers=thanh_vien&action=List");
	exit();
}
$session_id = $_SESSION['id'];
 ?>