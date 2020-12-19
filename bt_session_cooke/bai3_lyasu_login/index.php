<?php
ob_start();
session_start();

$ten_cookie = "A";
$_SESSION['ten_dn'] = "A";

if(empty($_SESSION['username'])){
	if(isset($ten_cookie)){
		if(isset($_COOKIE[$ten_cookie])){
			parse_str($_COOKIE[$ten_cookie]);

			$username="Admin";
			$password="Admin";
			if($username == "Admin"&&$password == "Admin"){
				//$choi = "chờ 30 giây để đăng nhập tiếp";
				require_once 'login.php';
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

	if (empty($_POST['username'])) {
		$user = "* Không được để rỗng username";
		$username=NULL;
	}else{
		$username = $_POST['username'];
	}
	
	if (empty($_POST['password'])) {
		$pass = "* Không được để rỗng password";
		$password=NULL;
	}else{
		$password = $_POST['password'];
	}

	if ($username=="admin" && $password=="admin") 
	{			
		$_SESSION['username']="admin";
		header('location:index.php');

	}
	else
	{
		if( isset($_SESSION['dn'])){
			$_SESSION['dn'] -= 1;
		}
		else
		{
			$_SESSION['dn'] = 2;
		}
		
		$dg = "<span class=\"loi\">username hoặc password không không đúng</span>";

		if ($_SESSION['dn']<3 && $_SESSION['dn']>0) {
			$sl = "<span class=\"soluong\">Còn ".$_SESSION['dn']." lần đăng nhập</span>";
		}
		else
		{

			setcookie($ten_cookie,$_SESSION['ten_dn'],time()+30);

			unset($_SESSION['dn']);
			$sl = "<span class=\"loi\">Bạn đã đăng nhập sai 3 lần.! hãy chờ 30 giây để đăng nhập lại</span>";
		}
	}
}

// if( isset($_COOKIE[$ten_cookie]))

// 	if ($_SESSION['ten_dn']) {
// 		$sl = "chờ 30 giây để đăng nhập tiếp";
// 		require_once 'login.php';
// 		exit();
// 	}else{
// 		setcookie($_COOKIE[$ten_cookie],$_SESSION['ten_dn'],time()-60);
// 		exit();
// 	}
// 	else
// 	{
// 		echo "Không có tên <br />";
// 	}

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