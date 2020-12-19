<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài 6 - đổi màu trang web</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		a{
			text-decoration: none;
		}
		.xanh{
			color: #0000ff;
		}
		.do{
			color: #ff0000;
		}
		.vang{
			color: #ffff00;
		}
		.den{
			color: #000000;
		}
		.cam{
			color: #ff6600;
		}
		.ghi{
			color: #adad85;
		}
		.matdinh{
			color: #FFFFFF;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<span>Lựa chọn màu nền cho trang web: </span>
			<label><a href="bai6.php?coler=xanh"><span class="xanh">Xanh</span></a></label>|
			<label><a href="bai6.php?coler=do"><span class="do">Đỏ</span></a></label>|
			<label><a href="bai6.php?coler=vang"><span class="vang">Vàng</span></a></label>|
			<label><a href="bai6.php?coler=den"><span class="den">Đen</span></a></label>|
			<label><a href="bai6.php?coler=cam"><span class="cam">Cam</span></a></label>|
			<label><a href="bai6.php?coler=ghi"><span class="ghi">Ghi</span></a></label>|
			<label><a href="bai6.php?coler=matdinh"><span class="matdinh">mặt định</span></a></label>
		</form>
		<?php 
			if (isset($_GET['coler'])) {
				$coler = $_GET['coler'];

				if(!$coler){
					echo "<style>
						body{
							background: #FFFFFF;
						}
					</style>";
				} elseif ($coler == "xanh") {
					echo "<style>
						body{
							background: #0000ff;
						}
					</style>";
				} elseif ($coler == "do") {
					echo "<style>
						body{
							background: #ff0000;
						}
					</style>";
				} elseif ($coler == "vang") {
					echo "<style>
						body{
							background: #ffff00;
						}
					</style>";
				} elseif ($coler == "den") {
					echo "<style>
						body{
							background: #000000;
						}
					</style>";
				} elseif ($coler == "cam") {
					echo "<style>
						body{
							background: #ff6600;
						}
					</style>";
				} elseif ($coler == "ghi") {
					echo "<style>
						body{
							background: #adad85;
						}
					</style>";
				} else{
					echo "<style>
						.body{
							background: #FFFFFF;
						}
					</style>";
				}
			}
		 ?>
	</div>
</body>
</html>