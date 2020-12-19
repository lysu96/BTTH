<?php 
require 'bai_1_connect.php';
//require_once 'table.php';
$action = "";
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}

switch ($action) {
 	case 'Edit':
 		if (isset($_GET['id'])) {
 			$id = $_GET['id'];
 			$name = $_GET['name'];
 			$full = $_GET['full'];
 			$password = $_GET['password'];
 			$sql = "UPDATE tbl_bai1_csdl SET name=$name,full=$full,password=$password WHERE id = $id";
 			$query = mysqli_query($con,$sql);
 			//header("location: index.php");
 		}
 		require_once 'Edit.php';
 		break;
 	case 'Delete':
 		# code...
 		break;
 	default:
 		$stt = 1;
 		require_once 'thongtin.php';
 		break;
 }

 ?>