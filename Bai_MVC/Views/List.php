<?php 
$tile = 'Danh sách thành viên';
include 'Master/Header.php';
//include 'Master/sessoin.php';
?>
<div align="center">
	<table border="1px">
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>Fullname</th>
				<th>Password</th>
				<th><a href="index.php?Controllers=thanh_vien&action=Add"><button style="width: 100%;">Thêm</button></a></th>
			</tr>
		</thead>
		<tbody>
			<?php $stt=0;
			foreach ($user as $value) {
				$stt++;
			 ?>
			<tr>
				<td><?php echo($stt); ?></td>
				<td><?php echo $value['name']; ?></td>
				<td><?php echo $value['fullname']; ?></td>
				<td><?php echo $value['password']; ?></td>
				<th>
					<a href="index.php?Controllers=thanh_vien&action=Edit&id=<?php echo $value['id'];?>">Edit</a>
					<a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" href="index.php?Controllers=thanh_vien&action=Delete&id=<?php echo $value['id']; ?>">Delete</a>
				</th>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<?php include 'Master/Footer.php'; ?>