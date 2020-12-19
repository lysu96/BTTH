<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>baif4 - máy tính</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<table border="1px" align="center">
				<tr>
					<td>Máy tính đơn giản</td>
				</tr>
				<tr>
					<?php require 'bai4_tinh.php'; ?>
					<td>số thứ nhất</td>
					<td><input type="text" name="a" value="<?php  echo($a);?>"></td>
				</tr>
				<tr>
					<td>Phép tính</td>
					<td><select name="pheptinh">
						<option value="">Lựa chọn phép toán</option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">x</option>
						<option value="/">:</option>
					</select></td>
				</tr>
				<tr>
					<td>Số thứ hai</td>
					<td><input type="text" name="b" value="<?php  echo($b);?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="kq" value="Kết quả"></td>
					<td><input type="text" name="kqpt" value="<?php  echo($kqd);?>"></td>
				</tr>
				<td colspan="2"><?php echo($kt); ?></td>
			</table>
		</form>
	</div>
</body>
</html>