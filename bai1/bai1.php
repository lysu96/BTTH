<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form</title>
	<link rel="stylesheet" href="">
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.TT{
			color: #000000;
			width: 80px;
			margin-bottom: 50px; 
		}
		.A{
			width: 400px;
			margin: 50px 50px;
		}
		input{
			margin-top: 5px;
			font-size: 20px;
		}
		.nut{
			margin-left: 200px;
			width: 100px;
			color: #FFFFFF;
		}
		p{
			margin-top: 30px;
		}
		#yc{
			color: red;
		}
	</style>
</head>
<body>
	<div class="A">
		<div class="TT">Đăng nhập</div>
		<form name="login" action="#p" method="POST" accept-charset="utf-8">
		<label>Username: </label><br/>
		<input type="text" name="textUser"><br/>
		<label>Password: </label><br/>
		<input type="text" name="textMK"><br/>
		<div class="nut">
			<input id="nutb" type="submit" name="Gui" value="Đăng nhập">
		</div>
	</form>
	</div>

	<?php 
		if (isset($_POST['Gui'])) {

			$E = $_POST['textUser'];
			$MK = $_POST['textMK'];
			$E_admin = "admin";
			$MK_admin = "admin";

			if(!$E && !$MK){
				echo "<span id=\"yc\">Yêu cầu nhập uername và password</span>";
			} else if($E==$E_admin && $MK==$MK_admin){

			echo ("<br> Tên đang nhập: ".$_POST['textUser']);
			echo ("<br> Mật khẩu: ".$_POST['textMK']);

			}else{
			echo ("Đang nhập sai.!");
		}

		}

	 ?>
</body>
</html>