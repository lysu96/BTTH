<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if (isset($tile)) echo($tile) ?></title>
	<link rel="stylesheet" href="">
	<style>
		.head_der{
			background: red;
			font-size: 30px;
			width: 900px;
			height: 100px;
		}
		h5{
			color: #ffffff;
		}
	</style>
</head>
<body>
	<div class="head_der">
		<span>Đây là phần head</span>
		<?php 
			if (isset($row['name'])) {
				echo "<h5 align=\"center\">Hi: ".$row['name']."</h5>";
			}else{
				echo "<a href=\"index.php?Controllers=thanh_vien&action=Login\" ><button >Đăng nhập</button></a>";
			}
		 ?>
	</div>
</body>
</html>