
<div align="center">
	<?php if (isset($dangnhap)) {
		echo($dangnhap);
	} ?>
	<form action="#" method="POST">
		<table>
			<tr>
				<th>Username: </th>
				<td><input type="text" name="username" placeholder="Tên đăng nhập">
					<?php if (isset($loi['username'])){ ?>
					<span style="color: red"><?php echo $loi['username']; ?></span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<th>Password: </th>
				<td><input type="password" name="password" placeholder="Mật khẩu">
					<?php if (isset($loi['password'])){ ?>
					<span style="color: red"><?php echo $loi['password']; ?></span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Login" value="Login"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<a href="#">Đăng Ký </a>?<a href="#"> Quên mật khẩu</a></td>
			</tr>
		</table>
	</form>
</div>
<?php require_once 'Master/Footer.php'; ?>