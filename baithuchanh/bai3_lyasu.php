<?php 
		if (isset($_POST['kq'])) {
			
			if (empty($_POST['km'])) {
				$rong = "* Nhập số Km";
				$km = NULL;
			}else{
				$km = $_POST['km'];
			}
			$khuhoi = $_POST['khuhoi'];
			$gia = 0;

			function Gia_tatxi($khuhoi,$km)
			{
				if($khuhoi=="co"){
					if($km <= 10){
						$gia = 15000*$km/2;
						//echo $gia;
					} elseif ($km>10 && $km<=25) {
						$gia = 15000*10/2 + 19000*($km - 10)/2;
						//echo $gia;
					}else{
						$gia = 7000*($km - 25)/2 + 150000/2 + 15*19000/2;
						//echo $gia;
					}

					// switch ($km) {
					// 	case '$km<=10':
					// 		$gia = 15000*$km/2;
					// 		echo $gia;
					// 		break;
					// 	case '$km>10 && $km<=25':
					// 		$gia = 15000*10/2 + 19000*($km - 10)/2;
					// 		echo $gia;
					// 		break;
					// 	case '$km>25':
					// 		$gia = 7000*($km - 25)/2 + 150000/2 + 15*19000/2;
					// 		echo $gia;
					// 		break;
					// 	default:
					// 		$gia = 15000*$km;
					// 		echo $gia;
					// 		break;
					// }
				}else{
					switch ($km) {
						case ($km<=10):
							$gia = 15000*$km;
							//echo $gia;
							break;
						case $km>10 && $km<=25:
							$gia = 150000 + 19000*($km - 10);
							//echo $gia;
							break;
						case $km>25:
							$gia = 7000*($km - 25) + 150000 + 15*19000;
							//echo $gia;
							break;
						default:
							$gia = 15000*$km;
							//echo $gia;
							break;
					}
				}
				return $gia;
			}
			$ht = Gia_tatxi($khuhoi,$km);	

		}

		?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai3 - tính tiền tatxi</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<table border="1px" align="center">
				<tr>
					<td align="center">Tính tiền tatxi</td>
				</tr>
				<tr>
					<td>Nhập số KM đi được: </td>
					<td><input type="text" name="km" value="">
						<?php 
							if (isset($rong)) {
								echo($rong);
							}
						 ?>
					</td>
				</tr>
				<tr>
					<td>Tính giá tiền khứ hồi: </td>
					<td>
						<input type="radio" name="khuhoi" value="co" checked>Có
						<input type="radio" name="khuhoi" value="khong">Không
					</td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="kq" value="Tính"></td>
				</tr>
				<td colspan="2">Số tiền phải trả: <?php if (isset($ht)) {
					echo $ht;
				} ?></td>
			</table>
		</form>
	</div>
</body>
</html>