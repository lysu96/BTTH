<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mô tả ngắn gọn- LY A SÚ</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		textarea{
			width: 250px;
			height: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<textarea name="Nodung"></textarea><br/>
			<input type="number" name="Sokytu" min="0">
			<input type="submit" name="Rutgon" value="Rút gọn">
		</form>
	</div>
	<?php 
		if (isset($_POST['Rutgon'])) {
			$Sokytu = $_POST['Sokytu'];
			$Nodung = "Vui lòng nhập số lượng ký tự mốn hiện thị..!";
			if ($Sokytu) {
				$Nodung = $_POST['Nodung'];
				function Chuyendoi($Nodung,$Sokytu)
				{
					
					//$str = strlen($Nodung); // đến ký tự
					$mangtu = explode(' ', $Nodung); // chuyển chuỗi thành mạng
					$sotud = str_word_count($Nodung);// đến từ trong chuỗi
					//echo $sotud."<br/>";
					$str = substr($Nodung, 0, $Sokytu);
					// echo $str."<br/>";
					// $str = strlen($str);
					// echo $str."<br/>";
					if ($str) {
						$sotu = str_word_count($str);
						$str = explode(' ', $str);
					}
					$mang = array();
					//echo $sotu."</br/>";
					for ($i=0; $i<$sotu; $i++) { 						
						if ($str[$i]==$mangtu[$i]) {
							$mang[]=$str[$i];
						}
						else
						{

							break;
						}
					}
					$str = implode(' ',$mang);// chuyển mảng thành chuỗi
					return $str;
				}
				$hienthi = Chuyendoi($Nodung,$Sokytu);
			}
			require_once 'tetx.php';
		}
	 ?>
</body>
</html>