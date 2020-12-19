<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>trang index</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1px" align="center" width="800px">
		<tr>
			<th><a href="index.php?action=trangchu">Trang chủ</a></th>
			<th><a href="index.php?action=gioithieu">Giới thiệu</a></th>
			<th><a href="index.php?action=tintuc">Tin tức</a></th>
			<th><a href="index.php?action=lienhe">Liên hệ</a></th>
			<th><a href="index.php?action=dienan">Diễn đàn</a></th>
		</tr>
		<tr>
			<td colspan="5" align="center" height="300px">
				<?php 
					if (isset($_GET['action'])) {
						$action = $_GET['action'];
						switch ($action) {
						case 'trangchu':
							require 'trangchu.php';
							break;
						case 'gioithieu':
							require 'gioithieu.php';
							break;
						case 'tintuc':
							require 'tintuc.php';
							break;
						case 'lienhe':
							require 'lienhe.php';
							break;
						case 'dienan':
							require 'dienan.php';
							break;
						default:
							require 'trangchu.php';
							break;
						}
					}else{
						echo "Nội Dung";
					}
	 			?>
	 		</td>
		</tr>
	</table>
	
</body>
</html>