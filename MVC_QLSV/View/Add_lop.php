<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div align="center">
		<?php if (isset($thanhcong)) {
			echo($thanhcong);
		} ?>
		<table>
			<form action="#" method="POST">
				<thead>
					<tr>
						<th>Tên Lớp: </th>
						<th><input type="text" name="texttenlop">
							<?php if (isset($loilop)) {
								echo($loilop);
							} ?>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mã lớp</td>
						<td><input type="text" name="textmalop">
							<?php if (isset($loimalop)) {
								echo($loimalop);
							} ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="themlop" value="Thêm lớp">
							<input type="reset" name="huy" value="Reset">
						</td>
					</tr>
				</tbody>
			</form>
		</table>
		<a href="index.php?controllers=sinh_vien&action=List_sv">Quay lại</a>
	</div>
</body>
</html>