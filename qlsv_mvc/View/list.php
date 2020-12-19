<?php 
// echo "<pre>";
// print_r($ds);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sach</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<table border="1px" align="center">
			<tr>
				<th>STT</th>
				<th>Mã sinh viên</th>
				<th>Tên sinh viên</th>
				<th>Lớp</th>
				<th>Năm sinh</th>
				<th>Hành động</th>
			</tr>
			<?php $stt = 0;
				foreach ($ds as $value) {
					$stt++;
			 ?>
			<tr>
				<td><?php echo $stt; ?></td>
				<td><?php echo $value['ma_sv']; ?></td>
				<td><?php echo $value['ten_sv']; ?></td>
				<td><?php echo $value['ten_lop']; ?></td>
				<td><?php echo date("d/m/Y",strtotime($value['sn'])); ?></td>
				<td>
					<a href="index.php?Controller=Sinhvien&action=edit&id=<?php echo $value['id_sv']; ?>">Sửa</a>
					<a onclick="return confirm('Bạn có chắc chắn muốn xóa không.?')" href="index.php?Controller=Sinhvien&action=delete&id=<?php echo $value['id_sv']; ?>">Xóa</a>
				</td>
			</tr>
		<?php } ?>
			<tr>
				<a href="index.php?Controller=Sinhvien&action=add">Thêm sinh viên</a>
			</tr>
		</table>
	</div>
</body>
</html>