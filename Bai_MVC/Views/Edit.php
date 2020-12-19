<?php 
$tile = 'Sửa thành viên';
include 'Master/Header.php';
 ?>
 <div class="E_dit" align="center">
 	<?php if (isset($thatbai)) {
 		echo($thatbai);
 	} ?>
 	<table>
 		<form action="#" method="POST">
 			<thead>
 				<th>Name: </th>
 				<th><input type="text" name="edit_name" value="<?php echo $hienthi['name']; ?>"></th>
 			</thead>
 			<tbody>
 				<tr>
 					<td>Fullname: </td>
 					<td><input type="text" name="edit_fullname" value="<?php echo $hienthi['fullname']; ?>"></td>
 				</tr>
 				<tr>
 					<td>Password: </td>
 					<td><input type="text" name="edit_password" value="<?php echo $hienthi['password']; ?>"></td>
 				</tr>
 				<tr>
				<td></td>
				<td>
					<input type="submit" name="Sua_tv" value="Edit">
					<input type="reset" name="huy" value="Reset">
				</td>
			</tr>
 			</tbody>
 		</form>
 	</table>
 	<a href="index.php?Controllers=thanh_vien&action=List">Quay lại</a>
 </div>
 <?php 
include 'Master/Footer.php';
  ?>