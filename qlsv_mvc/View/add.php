<?php
// echo "<pre>";
// print_r($ds);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm sinh viên</title>
	<link rel="stylesheet" href="">
	<style>
		*{
			padding: 0px;
			margin: 0px;
		}
		.contrainer{
			padding-top: 50px;
			width: 900px;
			margin: 0 auto;
		}
		table{
			margin: 0 auto;
		}
		input{
			font-size: 20px;
			margin: 2px;
		}
	</style>
</head>
<body>
	<div class="contrainer">
		<form action="#" method="POST">
			<table>
				<?php if (isset($th)) {
					echo $th;
				} ?>
				<tr>
					<th>Mã sinh viên: </th>
					<td><input type="text" name="txtma_sv" placeholder="DTC000"></td>
				</tr>
				<tr>
					<th>Họ và tên: </th>
					<td><input type="text" name="txtten_sv" placeholder="Nguyễn văn A"></td>
				</tr>
				<tr>
					<th>Lớp: </th>
					<td>
						<select name="txtma_lop">
							<option value="">--Lựa chọn--</option>
							<?php foreach ($ds as $value) {
								?>
								<option value="<?php echo $value['ma_lop']; ?>"><?php echo $value['ten_lop']; ?></option>}
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<th>Năm sinh: </th>
					<td><input type="date" name="txtns"></td>
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" name="Add" value="Thêm"></td>
				</tr>
				<tr>
					<a href="index.php?Controller=Sinhvien&action=list">Quay lại</a>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>