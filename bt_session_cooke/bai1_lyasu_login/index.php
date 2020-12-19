<?php
ob_start();
session_start();
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username=="admin" && $password=="admin") 
	{			
		$_SESSION['username']="admin";
		header('location:index.php');

	}
	else
	{
		echo 'Tên người dùng và mật khẩu không hợp lệ';
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="container">
		<?php 
 			if (empty($_SESSION['username'])) {
 				//echo($loidn);
 				require 'login.php';
 			}else{
 				header('location:admin.php');
 			}
 		 ?>
	</div>
</body>
</html>