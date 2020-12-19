<?php
ob_start();
session_start();
$cookie_name = 'siteAuth';
$cookie_time = 2592000;

if(empty($_SESSION['username'])){
	if(isset($cookie_name)){
		if(isset($_COOKIE[$cookie_name])){
			parse_str($_COOKIE[$cookie_name]);

			$username="Admin";
			$password="Admin";
			if($username == "Admin"&&$password == "Admin"){
				header('location:admin.php');
				exit;
			}
		}
	}
}
else
{
	header('location:admin.php');
	exit;
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$ghinho = ((isset($_POST['ghinho'])!=0)?1:"");

	if ($username=="Admin" && $password=="Admin") 
	{	
		$_SESSION['username']="Admin";
		if($ghinho==1){
			setcookie ($cookie_name, 'Admin', time() + $cookie_time);
		}	
		header('location:admin.php');
		exit();
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
			require 'login.php';
		}else{
			header('location:admin.php');
		}
		?>
	</div>
</body>
</html>