 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>List</title>
 	<link rel="stylesheet" href="">
 	<style type="text/css" media="screen">
 		.tbl_table{
 			width: 800px;
 			margin: 0 auto;
 		}
 	</style>
 </head>
 <body>
 	<div class="tbl_table">
 		<table border="1px" align="center">
 			<tr>
 				<th>STT</th>
 				<th>Mã sinh viên</th>
 				<th>Họ và tên</th>
 				<th>Lớp</th>
 				<th>Giới tính</th>
 				<th>Năm sinh</th>
 				<th>Hành động</th>
 				<th><a href="index.php?controllers=sinh_vien&action=Add_sv"><button type="">Thêm sinh viên</button></a>
 					<a href="index.php?controllers=sinh_vien&action=Add_lop"><button type="">Thêm Lớp</button></a>
 				</th>

 			</tr>
 			<?php 
				// echo "<pre>";
				// print_r($datalist);
 			$stt=0;
 			foreach ($datalist as $value) {
 				$stt++;
 				?>
 				<tr>
 					<td><?php echo($stt); ?></td>
 					<td><?php echo $value['ma_sinhvien']; ?></td>
 					<td><?php echo $value['ten_sinhvien']; ?></td>
 					<td><?php echo $value['ten_lop']; ?></td>
 					<td><?php echo $value['gioi_tinh']; ?></td>
 					<td><?php echo date("d-m-Y",strtotime($value['nam_sinh'])); ?></td>
 					<td colspan="2" align="center">
 						<a href="index.php?controllers=sinh_vien&action=Edit_sv&id=<?php echo $value['id_sinhvien']; ?>">Sửa</a>
 						<a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" href="index.php?controllers=sinh_vien&action=Delete_sv&id=<?php echo $value['id_sinhvien']; ?>">Xóa</a>
 					</td>
 				<?php } ?>
 			</tr>
 		</table>
 	</div>
 </body>
 </html>
 

