<?php 
		if (isset($_POST['kq'])) {
			
			if (empty($_POST['cr'])) {
				$ncr = "* Nhập chiều rộng";
				$cr=NULL;
			}else{
				$cr = $_POST['cr'];
			}
			if (empty($_POST['cd'])) {
				$ncd = "* Nhập chiều dài";
				$cd = NULL;
			}else{
				$cd = $_POST['cd'];
			}
			
			$tinh = $_POST['tinh'];

			function Tinhdientich($cr,$cd)
			{
				return ($cr*$cd);
			}
			function Tinhchuvi($cr,$cd)
			{
				return ($cr+$cd)*2;
			}
			if ($_POST['tinh']=="dt") {
				$htkq = Tinhdientich($cr,$cd);
			}else{
				$htkq = Tinhchuvi($cr,$cd);
			}

		}
		?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai1 - bai 1 tinh</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<table align="center">
				<tr>
					<td>Form</td>
				</tr>
				<tr>
					<td>Chiều rộng</td>
					<td><input type="text" name="cr" value="">
						<?php 
							if (isset($ncr)) {
								echo($ncr);
							}
						 ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="tinh" value="dt" checked>Tính diện tích
						<input type="radio" name="tinh" value="cv">Tính chu vi
					</td>
				</tr>
				<tr>
					<td>Chiều dài</td>
					<td><input type="text" name="cd" value="">
						<?php 
							if (isset($ncd)) {
								echo($ncd);
							}
						 ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="kq" value="Tính"></td>
				</tr>
				<tr>
					<td>Kết quả: </td>
					<td><?php if (isset($htkq)) {
						echo($htkq);
					} ?></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>