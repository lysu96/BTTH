<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài 5 - đổi màu trang web</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
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
			<label><span class="xanh">Xanh</span></label>
			<input type="radio" name="mau" value="xanh">|
			<label><span class="do">Đỏ</span></label>
			<input type="radio" name="mau" value="do">|
			<label><span class="vang">Vàng</span></label>
			<input type="radio" name="mau" value="vang">|
			<label><span class="den">Đen</span></label>
			<input type="radio" name="mau" value="den">|
			<label><span class="cam">Cam</span></label>
			<input type="radio" name="mau" value="cam">|
			<label><span class="ghi">Ghi</span></label>
			<input type="radio" name="mau" value="ghi">|
			<label><span class="matdinh">mặt định</span></label>
			<input type="radio" name="mau" value="matdinh">|
			<input type="submit" name="doimau" value="Đổi màu nền">|
		</form>
		<?php 
			if (isset($_POST['doimau'])) {
				$mau = $_POST['mau'];

				if(!$mau){
					echo "<style>
						body{
							background: #FFFFFF;
						}
					</style>";
				} elseif ($mau == "xanh") {
					echo "<style>
						body{
							background: #0000ff;
						}
					</style>";
				} elseif ($mau == "do") {
					echo "<style>
						body{
							background: #ff0000;
						}
					</style>";
				} elseif ($mau == "vang") {
					echo "<style>
						body{
							background: #ffff00;
						}
					</style>";
				} elseif ($mau == "den") {
					echo "<style>
						body{
							background: #000000;
						}
					</style>";
				} elseif ($mau == "cam") {
					echo "<style>
						body{
							background: #ff6600;
						}
					</style>";
				} elseif ($mau == "ghi") {
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