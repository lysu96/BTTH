<?php 
$tile = 'Danh sách thành viên';
include 'Master/Header.php';
?>
<div align="center">
	<table border="1px">
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>Fullname</th>
				<th>Password</th>
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
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<?php include 'Master/Footer.php'; ?>