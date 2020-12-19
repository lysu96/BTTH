<style>
	.container{margin:0px auto;}
	.form{width: 500px;margin:0px auto;margin-top: 50px;border: 1px solid #000000;}
	h3{height: 30px; color: #FFFFFF;margin-top: 0px; padding: 10px;font-weight: bold; background: #3399ff;}
	.loi{
		color: red;
	}
	.soluong{
		color: green;
	}
</style>
<div class="form">
	<form action="#" method="post">
		<h3 align="center">Đăng nhập</h3>
		<?php if (isset($dg)) {
			echo($dg)."</br>";
			echo($sl);
		} ?>
		<table align="center">
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="username" value="">
					<?php 
						if (isset($user)) {
							echo "<span class=\"loi\">".$user."</span>";
						}
					 ?>
				</td>
			</tr>

			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="password" value="">
					<?php 
						if (isset($pass)) {
							echo "<span class=\"loi\">".$pass."</span>";
						}
					 ?>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" value="Đăng nhập" name="submit">
				</td>
			</tr>
		</table>
	</form>
</div>