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
						<th>Mã sinh viên: </th>
						<th><input type="text" name="textmasv">
							<?php if (isset($loimasv)) {
								echo($loimasv);
							} ?>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Họ và tên</td>
						<td><input type="text" name="texttensv">
							<?php if (isset($loitensv)) {
								echo($loitensv);
							} ?>
						</td>
					</tr>
					<tr>
						<td>Mã lớp</td>
						<td><input type="text" name="textmalop">
							<?php if (isset($loimalop)) {
								echo($loimalop);
							} ?>
						</td>
					</tr>
					<tr>
						<td>Giới tính</td>
						<td><input type="text" name="textgioitinh">
							<?php if (isset($loigioitinh)) {
								echo($loigioitinh);
							} ?>
						</td>
					</tr>
					<tr>
						<td>Năm sinh</td>
						<td><input type="date" name="textnamsinh">
							<?php if (isset($loinamsinh)) {
								echo($loinamsinh);
							} ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="them" value="Add">
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