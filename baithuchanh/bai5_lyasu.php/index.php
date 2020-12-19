<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài 5 - chuyển đổi</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		textarea{
			width: 500px;
			height: 150px;
		}
	</style>
</head>
<body>
	<div class="container" align="center">
		<form action="#" method="POST">
			<textarea name="noidung"></textarea><br/>
			<input type="submit" name="chuyendoi" value="Chuyển đổi"><br/>
			<?php if (isset($_POST['chuyendoi'])) {
				$noidung = $_POST['noidung'];
				if(!$noidung==""){
					function chuyen_doi($str)
					{
						$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
      					$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
      					$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
      					$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
      					$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
      					$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
      					$str = preg_replace("/(đ)/", "d", $str);
      					$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
      					$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
      					$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
      					$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
      					$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
      					$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
      					$str = preg_replace("/(Đ)/", "D", $str);
      					$str = strtolower($str);
      					return $str;
					}
					$noidungdachuyen = chuyen_doi($noidung);
					require 'function_chuyendoi.php';

				}
			} ?>
		</form>
	</div>
</body>
</html>