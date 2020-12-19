<?php 
// echo "<pre>";
// print_r($gia_tri_sua);
 ?>
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
		<table>
			<form action="#" method="POST">
				<?php 
					foreach ($gia_tri_sua as $value) {
				 ?>
				<thead>
					<tr>
						<th>Mã sinh viên: </th>
						<th><input type="text" name="textmasv" value="<?php echo $value['ma_sinhvien']; ?>">
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Họ và tên</td>
						<td><input type="text" name="texttensv" value="<?php echo $value['ten_sinhvien']; ?>">
						</td>
					</tr>
					<tr>
						<td>Mã lớp</td>
						<td><input type="text" name="textmalop" value="<?php echo $value['ma_lop']; ?>">
						</td>
					</tr>
					<tr>
						<td>Giới tính</td>
						<td><input type="text" name="textgioitinh" value="<?php echo $value['gioi_tinh']; ?>">
						</td>
					</tr>
					<tr>
						<td>Năm sinh</td>
						<td><input type="date" name="textnamsinh" value="<?php echo $value['nam_sinh']; ?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="them" value="Edit">
							<input type="reset" name="huy" value="Reset">
						</td>
					</tr>
				</tbody>
				<?php } ?>
			</form>
		</table>
		<a href="index.php?controllers=sinh_vien&action=List_sv">Quay lại</a>
	</div>
</body>
</html>