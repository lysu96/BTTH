<?php 
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>admin-bai1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		echo "Đăng nhập thành công.!  <a href=\"logout.php\">Logout</a>";
	 ?>
</body>
</html>