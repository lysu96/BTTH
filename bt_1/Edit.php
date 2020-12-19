<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai 1 SQL SUA</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<table align="center">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $datas['name']; ?>"></td>
				</tr>
				<tr>
					<td>Full</td>
					<td><input type="text" name="full" value="<?php echo $datas['full']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="<?php echo $datas['password']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="edit" value="Sửa"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>